<?php

namespace App\Services\Settings;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Auth,
    Validator
};
use App\Models\WebsiteSetting;
use App\Traits\GlobalTrait;

class WebsiteSettingService
{
    /**
     * @var GlobalTrait
     */
    use GlobalTrait;

    /**
     * FaqService index
     * @param  Request $request
     * @return Response
     */
    
     public function manage($request): Response
    {
        
        $setting = WebsiteSetting::first();

        if (!$setting) {
            $setting = WebsiteSetting::create([
                'customer_care_contact' => $request->customer_care_contact,
                'telemedicine_hotline'  => $request->telemedicine_hotline,

                'facebook' => $request->facebook,
                'instagram'  => $request->instagram,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,

                'address'  => $request->address,
                'address_link' => $request->address_link,
            ]);
        }
        else {
            $setting->update([
                'customer_care_contact' => $request->customer_care_contact,
                'telemedicine_hotline'  => $request->telemedicine_hotline,

                'facebook' => $request->facebook,
                'instagram'  => $request->instagram,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,

                'address'  => $request->address,
                'address_link' => $request->address_link,
            ]);
        }

        // $this->generateLog($request->user(), "Changed", "Website Settings");
        $this->generateLog(Auth::guard('api')->user(), "Changed", "Website Settings", $setting);

        return response([
            'record' => $setting
        ]);
    }


    /**
     * FaqService show
     * @param  Faq $faq
     * @param  Request $request
     * @return Response
     */
    public function show ($request): Response
    {
        $setting = WebsiteSetting::first();

        // if ($setting) {
        //     // $this->generateLog($request->user(), "viewed this website setting ({$setting->id})");
        // }

        return response([
            'record' => $setting
        ]);
    }

    public function getFooterData ()
    {
        return WebsiteSetting::first();
    }

    /**
     * FaqService update
     * @param  Faq $faq
     * @param  Request $request
     * @return Response
     */
    
}
