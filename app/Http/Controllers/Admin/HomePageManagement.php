<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\HomePage;
use App\Model\Subscribe;

class HomePageManagement extends Controller
{
   
    /**
     * Top Banner Manage
     */
    public function topBannerEdit()
    {   
        $home_page_data = HomePage::latest() -> get();
        return view('admin.home.top-banner.edit', [
            'home_data'     => $home_page_data
        ]);
    }

    public function topBannerUpload(Request $request )
    {
        
        

        if ( $request -> hasFile('top_banner') ) {
            
           $img = $request -> file('top_banner');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/home'), $unique_name);
           unlink('public/media/home/'. $request -> old_file);

        }else {
            $unique_name = $request -> old_file;
        }


        if ( $request -> show ) {
            $show = "show";
        }else {
            $show = "";
        }


        $data = HomePage::find(1);

        $data -> top_banner = $unique_name;
        $data -> top_banner_switch = $show ;
        $data  -> update();

        return redirect() -> back() -> with('success', 'Top Banner added successful !');


        

    }


    /**
     * Logo Banner Manage
     */
    public function logoEdit()
    {
        $home_page_data = HomePage::find(1);
        return view('admin.home.logo.edit', [
            'home_data'     => $home_page_data
        ]);
    }

    public function logoUpload(Request $request)
    {
        if ( $request -> hasFile('logo') ) {
            
           $img = $request -> file('logo');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/home'), $unique_name);
           unlink('public/media/home/'. $request -> old_file);

        }else {
            echo $unique_name = $request -> old_file;
        }


        


        $data = HomePage::find(1);

        $data -> logo = $unique_name;
        $data  -> update();

        return redirect() -> back() -> with('success', 'Logo added successful !');

    }



    public function contactEdit()
    {
        $home_page_data = HomePage::find(1);
        return view('admin.home.contact.edit', [
            'home_data'     => $home_page_data
        ]);
    }

    public function contactUpload(Request $request)
    {
        

        $data = HomePage::find(1);

        $data -> contact_title = $request -> contact_title;
        $data -> contact_num = $request -> contact_num;
        $data  -> update();

        return redirect() -> back() -> with('success', 'Contact Info update successful !');

    }


    public function footerEdit()
    {
        $home_page_data = HomePage::find(1);
        return view('admin.home.footer.edit', [
            'home_data'     => $home_page_data
        ]);
    }

    public function footerUpload(Request $request)
    {
        

        $data = HomePage::find(1);

        $data -> footer_text = $request -> footer_text;
        $data  -> update();

        return redirect() -> back() -> with('success', 'Footer text update successful !');

    }



    public function socialEdit()
    {
        $home_page_data = HomePage::find(1);
        return view('admin.home.social.edit', [
            'home_data'     => $home_page_data
        ]);
    }

    public function socialUpload(Request $request)
    {
        

        $data = HomePage::find(1);

        $data -> facebook = $request -> fb;
        $data -> twitter = $request -> tw;
        $data -> linkedin = $request -> lin;
        $data -> google_plus = $request -> google;
        $data -> instagram = $request -> insta;
        $data  -> update();

        return redirect() -> back() -> with('success', 'Social liks added successful !');

    }





    public function newsletterEdit()
    {
        $home_page_data = HomePage::find(1);
        return view('admin.home.newsletter.edit', [
            'home_data'     => $home_page_data
        ]);
    }

    public function newsletterUpload(Request $request)
    {
        

        if ( $request -> hasFile('newsletter_bg') ) {
            
           $img = $request -> file('newsletter_bg');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/home'), $unique_name);
           unlink('public/media/home/'. $request -> old_file);

        }else {
            echo $unique_name = $request -> old_file;
        }

        $data = HomePage::find(1);

        $data -> newsletter_title = $request -> newsletter_title;
        $data -> newsletter_desc = $request -> newsletter_desc;
        $data -> newsletter_bg = $unique_name;
        $data  -> update();

        return redirect() -> back() -> with('success', 'Social liks added successful !');

    }










    /**
     * Subscribe Managements
     */
    public function subscriberUpload(Request $request)
    {
        /**
         * Post validate 
         */
        $this -> validate($request, [
            'subscriber'          => 'required|email',

        ],[
            'subscriber.required' => 'Subscriber   is required ! ',
        ]);

        Subscribe::create([
            'email'     => $request -> subscriber,
        ]);

        return redirect() -> back();

    }


    public function subscriberView()
    {
        $data = Subscribe::latest() -> get();
        return view('admin.home.subscriber.index', [
            'all_subs'  => $data
        ]);
    }



    /**
     * Page Title Banner 
     */

    public function pageBannerView()
    {
        $home_page_data = HomePage::find(1);
        return view('admin.home.title-banner.edit', [
            'home_data'     => $home_page_data
        ]);
    }

    public function pageBannerUpload(Request $request)
    {


        if ( $request -> hasFile('page_banner') ) {
            
           $img = $request -> file('page_banner');

           $unique_name = md5(time() . rand()).".". $img -> getClientOriginalExtension();

           $img -> move(public_path('media/home'), $unique_name);

           unlink('public/media/home/'. $request -> old_file);

        }else {
            echo $unique_name = $request -> old_file;
        }


        


        $data = HomePage::find(1);

        $data -> page_banner = $unique_name;
        $data  -> update();

        return redirect() -> back() -> with('success', 'Page Banner added successful !');

    }

}
