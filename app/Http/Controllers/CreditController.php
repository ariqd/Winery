<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Card;
use App\Category;
use App\Holder;
use App\Submission;
use App\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($filter = [])
    {
        $data['filtered'] = FALSE;
        $data['cards'] = Card::orderBy('nama')->paginate(16);
        $data['banks'] = Bank::orderBy('nama')->get();
        $data['types'] = Type::all();
        $data['holders'] = Holder::all();
        $data['categories'] = Category::all();
        return view('credit.view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['banks'] = Bank::orderBy('nama')->get();
        $data['card'] = Card::findOrFail($id);
        return view('credit.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'notelp' => 'required',
            'kota' => 'required',
            'penghasilan' => 'required',
            'pekerjaan' => 'required',
            'lahir_thn' => 'required',
            'lahir_bln' => 'required',
            'lahir_tgl' => 'required'
        ]);

        $submission = new Submission;

        $date = $request->lahir_thn . '-' .  $request->lahir_bln . '-' .$request->lahir_tgl;

        $submission->nama = $request->nama;
        $submission->email = $request->email;
        $submission->alamat = $request->alamat;
        $submission->notelp = $request->notelp;
        $submission->tinggal = $request->kota;
//        $submission->tgl_lahir = Carbon::createFromDate($request->lahir_thn, $request->lahir_bln, $request->lahir_tgl);
        $submission->tgl_lahir = new Carbon($date);
        $submission->penghasilan = $request->penghasilan;
        $submission->pekerjaan = $request->pekerjaan;
        $submission->owned = implode(',', $request->bank);
        $submission->id_card = $id;

        $submission->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['card'] = Card::findOrFail($id);
        $data['related'] = Card::where([
            ['id_bank', '=',    $data['card']->id_bank],
            ['id',      '!=',   $data['card']->id]
        ])->take(4)->get();
        return view('credit.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function submission_filter(Request $request)
    {
        if(!isset($request->nama)){
            $request->nama = "";
        }
        $banks = Bank::where('nama', 'LIKE', '%'.$request->nama.'%')->get();

        if (!$banks->isEmpty()){
            foreach ($banks as $bank)
            {
                echo "<div class=\"col-lg-3\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"bank[]\" value=".$bank->nama." id=".$bank->nama.">
                            <label class=\"form-check-label\" for=".$bank->nama.">
                                <img src=\"".asset('img/bank/'.$bank->gambar)."\" alt=\"winery-".$bank->nama."\" class=\"bank-img\">
                            </label>
                        </div>
                    </div>";
            }
        }
    }

    public function filter(Request $request)
    {
        $cards = Card::where([
            ['id_bank',     '=',    $request->bank],
            ['id_category', 'LIKE', $request->category],
            ['id_type',     'LIKE', $request->type],
            ['id_holder',   'LIKE', $request->holder],
        ])->orderBy('nama')->get();

        if(isset($request->bank)){
            $bank = Bank::find($request->bank);
        }

        if (!$cards->isEmpty()){
            if(isset($request->bank)){
                echo '<div class="col-lg-12 mb-3">
                        <div class="card">
                        <div class="card-body">
                        <div class="row">
                        <div class="col-lg-3">
                        <img src="'.asset('img/bank/'.$bank->gambar.'').'" class="img-fluid">
                        </div>
                        <div class="col-lg-9">
                        <h5 class="card-title">'.
                    $bank->nama
                    .'</h5>
                        <p class="card-text">'.
                    nl2br($bank->deskripsi)
                    .'</p>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>';
            }

            foreach ($cards as $card)
            {
                echo '<div class="col-lg-3">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="'.asset('img/cards/'.$card->gambar).'">
                        <div class="card-body">
                            <h5 class="card-title">'.$card->nama.'</h5>
                            <h3 class="card-text">IDR '.number_format($card->harga, 0, ',', '.').'</h3>
                            <a href="'. url('kartu-kredit/detail/'.$card->id) .'" class="btn btn-winery-2 btn-block mt-3">Lihat Detail</a>
                            <a href="'. url('kartu-kredit/ajukan/'.$card->id) .'" class="btn btn-winery-3 btn-block mt-3">Ajukan</a>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<div class='col-lg-12'>
<h4 class='text-center'>Kartu tidak ditemukan</h4>
         </div>";
        }
    }
}
