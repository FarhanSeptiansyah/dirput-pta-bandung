<?php

namespace App\Http\Controllers;

use App\Models\DirputModel;

class DirputController extends Controller
{
    public function __construct()

    {
        $this->DirputModel = new DirputModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Direktori Putusan',
            'dirput' => $this->DirputModel->allData(),
        ];
        return view('/dirput_admin/v_dirput_admin', $data);
    }

    // Admin 
    public function admin()
    {
        $data = [
            'title' => 'Direktori Putusan',
            'dirput' => $this->DirputModel->allData(),
        ];
        return view('/dirput_admin/v_dirput_admin', $data);
    }

    // Add Data
    public function add()
    {
        $data = [
            'title' => 'Input Dirput'
        ];
        return view('/dirput_admin/v_add_dirput', $data);
    }

    // Insert Data
    public function insert()
    {
        Request()->validate([
            'no_banding' => 'required|unique:tb_dirput',
            'putusan' => 'required|mimes:pdf|max:2000',
        ], [
            'no_banding.required' => 'Nomor perkara wajib diisi!!!',
            'no_banding.unique' => 'Nomor perkara sudah ada!!!',
            'no_banding.max' => 'Max 255 Karakter!!!',
            'putusan.required' => 'Putusan anonimasi wajib diupload!!!',
            'putusan.mimes' => 'Jenis file harus pdf!!!',
            'putusan.max' => 'Ukuran file max 2Mb!!!',
        ]);

        // Jika validasi data sesuai maka simpan data dan upload file

        $file = Request()->putusan;
        $fileName = str_replace("/", "_",  Request()->no_banding)  . '_' . date('dmY') . '.' . $file->extension();
        $file->move(public_path('/dirput-pta/dirput'), $fileName);

        $data = [
            'no_banding' => Request()->no_banding,
            'j_perkara' => Request()->j_perkara,
            'tgl_put_banding' => Request()->tgl_put_banding,
            'putusan' => $fileName,
        ];

        $this->DirputModel->addData($data);
        return redirect('/dirput-pta/admin')
            ->with('pesan', 'Data perkara berhasil ditambahkan!!');
    }

    //ubah data
    public function edit($id_dirput)
    {
        if (!$this->DirputModel->detailData($id_dirput)) {
            abort(404);
        }
        $data = [
            'title' => 'Edit Dirput',
            'dirput' => $this->DirputModel->detailData($id_dirput),
        ];
        return view('/dirput_admin/v_edit_dirput', $data);
    }

    public function update($id_dirput)
    {
        Request()->validate([
            'no_banding' => 'required',
            'putusan' => 'mimes:pdf|max:2000',
        ], [
            'putusan.required' => 'Putusan anonimasi wajib diupload!!!',
            'putusan.mimes' => 'Jenis file harus pdf!!',
            'putusan.max' => 'Ukuran file max 2Mb!!',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->putusan <> "") {
            //Jika ganti file
            //upload file
            $file = Request()->putusan;
            $fileName = str_replace("/", "_",  Request()->no_banding) . '_' . date('dmY') . '.' . $file->extension();
            $file->move(public_path('/dirput-pta/dirput'), $fileName);

            $data = [
                'no_banding' => Request()->no_banding,
                'j_perkara' => Request()->j_perkara,
                'tgl_put_banding' => Request()->tgl_put_banding,
                'putusan' => $fileName,
            ];

            $this->DirputModel->editData($id_dirput, $data);
        } else {
            //Jika tidak ganti file
            //upload file
            $data = [
                'no_banding' => Request()->no_banding,
                'j_perkara' => Request()->j_perkara,
                'tgl_put_banding' => Request()->tgl_put_banding,
            ];

            $this->DirputModel->editData($id_dirput, $data);
        }
        return redirect('/dirput-pta/admin')
            ->with('pesan', 'Data perkara berhasil diupdate !!');
    }

    public function delete($id_dirput)
    {
        //hapus file
        $dirput = $this->DirputModel->detailData($id_dirput);
        if ($dirput->putusan <> "") {
            unlink(public_path('/dirput-pta/dirput') . '/' . $dirput->putusan);
        }

        $this->DirputModel->deleteData($id_dirput);
        return redirect('/dirput-pta/admin')
            ->with('pesan', 'Data perkara berhasil Dihapus !!');
    }
}
