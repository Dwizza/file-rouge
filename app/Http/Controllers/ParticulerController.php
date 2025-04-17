<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\Category;
use App\Models\Particuler;
use App\Http\Requests\StoreParticulerRequest;
use App\Http\Requests\UpdateParticulerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticulerController extends Controller
{
    // UserController.php
public function dashboard()
{
    $categories = Category::all();
    // $annonces = annonce::where('user_id', auth()->id())->get();
    $user = Auth::user();
    $annonces = annonce::where('user_id', $user->id)->with('category')->latest()->paginate(10);
    // dd($annonces);
    return view('particulier.account', compact('categories', 'annonces', 'user'));
}

public function profile()
{
    return view('user.profile');
}
public function home()
    {
        $annonces = annonce::all();
        $categories = Category::all();
        // return view('home', compact('annonces', 'categories'));
        return view('particulier.index', compact('annonces', 'categories'));
    }

public function updateProfile(Request $request)
{
    $user = Auth::user();
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        'phone' => 'nullable|string|max:20',
        'city' => 'nullable|string|max:100',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('profile-photos', 'public');
        $user->photo = $photoPath;
    }
    
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->city = $request->city;
    $user->save();
    
    return redirect()->route('user.profile')->with('success', 'Profil mis à jour avec succès');
}

// UserAnnonceController.php
public function index()
{
    $annonces = Auth::user()->annonces()->with('category')->latest()->paginate(10);
    return view('user.annonces.index', compact('annonces'));
}

public function create()
{
    $categories = Category::all();
    return view('user.annonces.create', compact('categories'));
}


public function store(Request $request)
    {
        // dd('dazt');
        $validate = array_merge(
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'category_id' => 'required',
                'location' => 'required|string',
                'image' => 'required',
                'image.*' => 'image|mimes:jpeg,png,webp,jpg,gif|max:10240'
            ]),
            ['user_id' => auth()->id()]
        );
        // dd('$validate');

        
        if ($request->hasFile('image')) {
            $images = $request->file('image');
            $imagePaths = [];
            foreach ($images as $image) {
                $imageName = time() . '-' . uniqid() . '.' . $image->extension();
                $image->move(public_path('images'), $imageName);
                $imagePaths[] = 'images/' . $imageName;
            }
            $validate['image'] = implode(',', $imagePaths);
        } else {
            $validate['image'] = null; 
        }
        
        Annonce::create($validate)->save();
        

        return redirect('/user/dashboard')->with('success', 'annonce created successfully.');

    }
    public function edit(annonce $annonce)
    {
        $categories = Category::all();
        // dd($annonce->image);
        return view('particulier.editAnnonces', compact('annonce', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $annonce = Annonce::findOrFail($id);

        // 1. Get remaining old images
        $remaining = $request->input('remaining_images', []); // array

        // 2. Handle new images
        $newImages = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $path = $file->move('images');
                $newImages[] = $path;
            }
        }
        
        $finalImages = array_merge($remaining, $newImages);

        $annonce->image = implode(',', $finalImages);

        $annonce->title = $request->title;
        $annonce->price = $request->price;
        $annonce->description = $request->description;
        $annonce->location = $request->location;
        $annonce->category_id = $request->category_id;
        $annonce->status = 'draft';
        $annonce->save();

        return redirect()->route('user.dashboard')->with('success', 'annonce updated successfully.');
    }
    public function destroy($id)
    {
        annonce::destroy($id);
        // dd('chi haja');
        return redirect()->route('user.dashboard')->with('success', 'Annonce supprimée avec succès.');
    }

}
