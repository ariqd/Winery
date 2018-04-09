<?php

namespace App\Http\Controllers\Admin;

use App\Bank;
use App\Card;
use App\Category;
use App\Document;
use App\Holder;
use App\Submission;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreditCardsController extends Controller
{
    // Manage Credit Card (CRUD)

    public function index()
    {
        $data['cards'] = Card::paginate(12);
        return view('admin.credit.view', $data);
    }

    public function form($id = 0)
    {
        $data['edit'] = FALSE;
        $data['title'] = 'Tambah';

        if ($id != 0) {
            $data['card'] = Card::findOrFail($id);
            $data['edit'] = TRUE;
            $data['title'] = 'Edit';
        }

        $data['banks'] = Bank::all();
        $data['types'] = Type::all();
        $data['holders'] = Holder::all();
        $data['categories'] = Category::all();

        return view('admin.credit.form', $data);
    }

    public function manage(Request $request, $id = 0)
    {
//        dd($request->all());
        if ($id != 0) {
            $card = Card::find($id);
            if ($request->file('gambar')) {
                $file = $request->file('gambar');
                //Display File Name
                echo 'File Name: '.$file->getClientOriginalName();
                echo '<br>';

                //Move Uploaded File
                $destinationPath = 'img/cards';
                $file->move($destinationPath,$file->getClientOriginalName());

                $card->gambar = $file->getClientOriginalName();
            }
//            $document = Document::where('cards_id', $id)->get();
            $card->document->ktp_karyawan = isset($request->ktp_karyawan) ? $request->ktp_karyawan : 0;
            $card->document->ktp_wirausaha = isset($request->ktp_wirausaha) ? $request->ktp_wirausaha : 0;
            $card->document->ktp_profesional = isset($request->ktp_profesional) ? $request->ktp_profesional : 0;

            $card->document->penghasilan_karyawan = isset($request->penghasilan_karyawan) ? $request->penghasilan_karyawan : 0;
            $card->document->penghasilan_wirausaha = isset($request->penghasilan_wirausaha) ? $request->penghasilan_wirausaha : 0;
            $card->document->penghasilan_profesional = isset($request->penghasilan_profesional) ? $request->penghasilan_profesional : 0;

            $card->document->tabungan_karyawan = isset($request->tabungan_karyawan) ? $request->tabungan_karyawan : 0;
            $card->document->tabungan_wirausaha = isset($request->tabungan_wirausaha) ? $request->tabungan_wirausaha : 0;
            $card->document->tabungan_profesional = isset($request->tabungan_profesional) ? $request->tabungan_profesional : 0;

            $card->document->izin_karyawan = isset($request->izin_karyawan) ? $request->izin_karyawan : 0;
            $card->document->izin_wirausaha =  isset($request->izin_wirausaha) ? $request->izin_wirausaha : 0;
            $card->document->izin_profesional = isset($request->izin_profesional) ? $request->izin_profesional : 0;

            $card->document->npwp_karyawan = isset($request->npwp_karyawan) ? $request->npwp_karyawan : 0;
            $card->document->npwp_wirausaha = isset($request->npwp_wirausaha) ? $request->npwp_wirausaha : 0;
            $card->document->npwp_profesional = isset($request->npwp_profesional) ? $request->npwp_profesional : 0;

            $card->document->pendirian_karyawan = isset($request->pendirian_karyawan) ? $request->pendirian_karyawan : 0;
            $card->document->pendirian_wirausaha = isset($request->pendirian_wirausaha) ? $request->pendirian_wirausaha : 0;
            $card->document->pendirian_profesional = isset($request->pendirian_profesional) ? $request->pendirian_profesional : 0;
        } else {
            $card = new Card;

            // Insert Gambar
            $file = $request->file('gambar');
            //Display File Name
            echo 'File Name: '.$file->getClientOriginalName();
            echo '<br>';
            //Move Uploaded File
            $destinationPath = 'img/cards';
            $file->move($destinationPath,$file->getClientOriginalName());
            $card->gambar = $file->getClientOriginalName();
            // End insert gambar
        }

        $card->nama = $request->nama;
        $card->deskripsi = $request->deskripsi;
        $card->harga = $request->harga;
        $card->id_bank = $request->id_bank;
        $card->id_category = $request->id_category;
        $card->id_type = $request->id_type;
        $card->id_holder = $request->id_holder;

        $card->save();

        if ($id == 0) {
            $document = new Document;

            $document->cards_id = $card->id;
            $document->ktp_karyawan = isset($request->ktp_karyawan) ? $request->ktp_karyawan : 0;
            $document->ktp_wirausaha = isset($request->ktp_wirausaha) ? $request->ktp_wirausaha : 0;
            $document->ktp_profesional = isset($request->ktp_profesional) ? $request->ktp_profesional : 0;

            $document->penghasilan_karyawan = isset($request->penghasilan_karyawan) ? $request->penghasilan_karyawan : 0;
            $document->penghasilan_wirausaha = isset($request->penghasilan_wirausaha) ? $request->penghasilan_wirausaha : 0;
            $document->penghasilan_profesional = isset($request->penghasilan_profesional) ? $request->penghasilan_profesional : 0;

            $document->tabungan_karyawan = isset($request->tabungan_karyawan) ? $request->tabungan_karyawan : 0;
            $document->tabungan_wirausaha = isset($request->tabungan_wirausaha) ? $request->tabungan_wirausaha : 0;
            $document->tabungan_profesional = isset($request->tabungan_profesional) ? $request->tabungan_profesional : 0;

            $document->izin_karyawan = isset($request->izin_karyawan) ? $request->izin_karyawan : 0;
            $document->izin_wirausaha =  isset($request->izin_wirausaha) ? $request->izin_wirausaha : 0;
            $document->izin_profesional = isset($request->izin_profesional) ? $request->izin_profesional : 0;

            $document->npwp_karyawan = isset($request->npwp_karyawan) ? $request->npwp_karyawan : 0;
            $document->npwp_wirausaha = isset($request->npwp_wirausaha) ? $request->npwp_wirausaha : 0;
            $document->npwp_profesional = isset($request->npwp_profesional) ? $request->npwp_profesional : 0;

            $document->pendirian_karyawan = isset($request->pendirian_karyawan) ? $request->pendirian_karyawan : 0;
            $document->pendirian_wirausaha = isset($request->pendirian_wirausaha) ? $request->pendirian_wirausaha : 0;
            $document->pendirian_profesional = isset($request->pendirian_profesional) ? $request->pendirian_profesional : 0;

            $document->save();
        }

        return redirect('admin/cards');
    }

    public function delete_card($id)
    {
        Card::destroy($id);
        return redirect('admin/cards');
    }

    // End Credit Card CRUD

    public function requests()
    {
        $data['submissions'] = Submission::where('approved', false)->get();
//        dd($data);
        return view('admin.credit.requests', $data);
    }

    public function approve($id)
    {
        $submission = Submission::findOrFail($id);

        $submission->approved = TRUE;

        $submission->save();

        return redirect('admin/requests');
    }

    public function decline($id)
    {
        Submission::destroy($id);
        return redirect('admin/requests');
    }

    public function approved()
    {
        $data['submissions'] = Submission::where('approved', true)->get();
        return view('admin.credit.approved', $data);
    }

    public function search(Request $request)
    {
        $cards = Card::where('nama', 'LIKE', '%'.$request->nama.'%')->paginate(12);

        if (!$cards->isEmpty()){
            foreach ($cards as $card)
            {
                echo '<div class="col-lg-3 mb-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="'.asset('img/cards/'.$card->gambar).'" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">'. $card->nama .'</h5>
                    <h3 class="card-text">IDR '.number_format($card->harga, 0, ',', '.') .'</h3>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="'.url('kartu-kredit/detail/'. $card->id).'" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
                        <a href="'.url('admin/cards/edit/'.$card->id).'" class="btn btn-winery-3 btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#card'.$card->id.'"><i class="fa fa-trash"></i> Hapus</button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="card'.$card->id.'" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteLabel">Hapus '.$card->nama.'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus kartu kredit '.$card->nama.' ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="'.url('admin/cards/delete/'.$card->id).'" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
//                echo "<div class=\"col-lg-3 mb-3\">
//            <div class=\"card\">
//                <img class=\"card-img-top img-fluid\" src=\"'.asset('img/cards/'.$card->gambar).'\">
//                <div class=\"card-body\">
//                    <h5 class=\"card-title\">". $card->nama ."</h5>
//                    <h3 class=\"card-text\">IDR ".number_format($card->harga, 0, ',', '.')."</h3>
//                    <div class=\"d-flex justify-content-between mt-3\">
//                        <a href=".url('kartu-kredit/detail', $card->id)." class=\"btn btn-info btn-sm\"><i class=\"fa fa-eye\"></i> Detail</a>
//                        <a href=".url('admin/cards/edit/'.$card->id)." class=\"btn btn-winery-3 btn-sm\"><i class=\"fa fa-pencil\"></i> Edit</a>
//                        <button class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#card".$card->id."\"><i class=\"fa fa-trash\"></i> Hapus</button>
//                    </div>
//                </div>
//            </div>
//            <!-- Modal -->
//            <div class=\"modal fade\" id=\"card".$card->id."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteLabel\">
//                <div class=\"modal-dialog\" role=\"document\">
//                    <div class=\"modal-content\">
//                        <div class=\"modal-header\">
//                            <h5 class=\"modal-title\" id=\"deleteLabel\">Hapus ".$card->nama."</h5>
//                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
//                                <span aria-hidden=\"true\">&times;</span>
//                            </button>
//                        </div>
//                        <div class=\"modal-body\">
//                            Apakah anda yakin ingin menghapus kartu kredit ".$card->nama." ?
//                        </div>
//                        <div class=\"modal-footer\">
//                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Batal</button>
//                            <a href=". url('admin/cards/delete/'.$card->id)." class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Hapus</a>
//                        </div>
//                    </div>
//                </div>
//            </div>
//        </div>";
            }
        }
    }
}