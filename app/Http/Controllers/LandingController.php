<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $services = getJsonData("services.json");
        $features = getJsonData("features.json");
        $needs = getJsonData("needs.json");
        $files = getJsonData("files.json");
        $info = getJsonData("info.json");
        $data["services"] = $services;
        $data["features"] = $features;
        $data["needs"] = $needs;
        $data["info"] = $info;

        foreach ($files as $key => $file) {
            $url = $file["file"];
            $files[$key]["location"] = asset("assets/files/$url");
        }
        $data["files"] = $files;
        return view("home", $data);
    }

    public function contact(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);

        // Example: Send an email (if you have Mailable configured)
        // Mail::to('your@email.com')->send(new ContactFormMail($validated));

        // Example: Save to database (if you have a Contact model)
        // Contact::create($validated);

        return SuccessResponse(200, "Gracias por contactarnos. Te responderemos pronto.", __METHOD__, "Gracias por contactarnos. Te responderemos pronto.");
    }
}
