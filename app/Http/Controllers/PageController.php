<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PageController extends Controller
{
    public function home()
    {
        return view('home', ["key" => "Home"]);
    }

    public function helm()
    {
        $helm = Helm::orderBy('id', 'desc')->get();
        return view('helm', ["key" => "Helm", "hlm" => $helm]);
    }

    public function addhelm()
    {
        return view('formadd', ["key" => "Helm"]);
    }

    public function savehelm(Request $request)
    {
        $file_name = time() . '-' . $request->file('poster')->getClientOriginalName();
        $path = $request->file('poster')->storeAs('poster', $file_name, 'public');

        Helm::create([
            'merk' => $request->merk,
            'jenis' => $request->jenis,
            'type' => $request->type,
            'warna' => $request->warna,
            'harga' => $request->harga,
            'poster' => $path
        ]);

        return redirect("helm")->with('alert', 'Data berhasil disimpan');
    }

    public function edithelm($id)
    {
        $helm = Helm::find($id);
        return view('formedit', ["key" => "Helm", "hlm" => $helm]);
    }

    public function updatehelm($id, Request $request)
    {
        $helm = Helm::find($id);
        $helm->merk = $request->jenis;
        $helm->jenis = $request->merk;
        $helm->type = $request->type;
        $helm->warna = $request->warna;
        $helm->harga = $request->harga;

        if ($request->poster) {
            if ($helm->poster) {
                Storage::disk('public')->delete($helm->poster);
            }
            $file_name = time() . '-' . $request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
            $helm->poster = $path;
        }
        $helm->save();
        return redirect("helm")->with('alert', 'Data berhasil diubah');
    }

    public function deletehelm($id)
    {
        $helm = Helm::find($id);

        if ($helm->poster) {
            Storage::disk('public')->delete($helm->poster);
        }

        $helm->delete();
        return redirect("/helm")->with('alert', 'Data berhasil dihapus');
    }

    public function login()
    {
        return view("/login");
    }


    public function edituser()
    {
        return view("/edituser", ["key" => ""]);
    }

    public function updateuser(request $request)
    {
        if 
        ($request->password_baru == $request->konfirmasi_password) 
        {
            auth::user()->password = bcrypt($request->password_baru);

            auth::user()->save();

            return redirect("/user")->with("info", "password berhasil di ubah");
        } 
        else 
        {
            return redirect("/user")->with("info", "passsword gagal di ubah");
        }

    }


}


?>