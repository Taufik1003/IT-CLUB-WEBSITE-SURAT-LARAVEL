<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Models\Surat;


class SuratController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $items = Surat::latest()->get();

            return DataTables::of($items)
                               ->addColumn('action', function ($item) {
                    return  '
                           <a class="btn btn-warning my-1 btn-sm" href="/edit-surat/'.$item->id.'"  >Edit</a>
                           <a class="btn btn-danger my-1 btn-sm" href="/hapus-surat/'.$item->id.'" >Hapus</a>';
                })
                ->removeColumn('id')
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('surat.index');
    }

    public function tambahSurat()
    {
        return view('surat.add');
    }

    public function simpan(Request $request)
    {
        $surat = new Surat();
        $surat->perihal = $request->perihal;
        $surat->nomor_surat = $request->nomor_surat;
        $surat->tanggal = $request->tanggal;
        $surat->tujuan = $request->tujuan;
        $surat->save();
        return redirect('/surat');
    }

    public function editSurat($id)
    {
        $item = surat::find($id);
        return view('/surat.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $surat = surat::find($id);
        $surat->perihal = $request->perihal;
        $surat->nomor_surat = $request->nomor_surat;
        $surat->tanggal = $request->tanggal;
        $surat->tujuan = $request->tujuan;
        $surat->save();
        return redirect('/surat');
    }

    public function delete($id)
    {
        $item = Surat::find($id);
        $item->delete();
        return redirect('/surat');
    }

}
