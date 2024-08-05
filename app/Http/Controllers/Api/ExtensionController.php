<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


use App\Models\Extension;
use App\Models\Setting;
use App\Models\SettingTwo;

use App\Helpers\Classes\Helper;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use OpenAI\Laravel\Facades\OpenAI;

class ExtensionController extends Controller
{
    protected $settings;
    protected $settings_two;
    public function __construct()
    {
        $this->settings = Setting::first();
		$this->settings_two = SettingTwo::first();
    }

    // /**
    //  * Gets installed extensions
    //  *
    //  * @OA\Get(
    //  *      path="/api/extensions",
    //  *      operationId="extensionIndex",
    //  *      tags={"Extensions"},
    //  *      security={{ "passport": {} }},
    //  *      summary="Gets installed extensions",
    //  *      description="Returns installed extensions",
    //  *      @OA\Response(
    //  *          response=200,
    //  *          description="Successful operation",
    //  *      ),
    //  *      @OA\Response(
    //  *          response=401,
    //  *          description="Unauthenticated",
    //  *      ),
    //  */
    public function extensionIndex()
    {
        $extensions = Extension::where('installed', 1)->get();
        return response()->json($extensions);
    }

}