
<?php

use Carbon\Carbon;

    function UserId()
    {
        return Auth::user()->id;
    }

    function slug($string)
    {
        return Illuminate\Support\Str::slug($string);
    }

    function shortDescription($string, $length = 120)
    {
        return Illuminate\Support\Str::limit($string, $length);
    }

    function shortCodeReplacer($shortCode, $replace_with, $template_string)
    {
        return str_replace($shortCode, $replace_with, $template_string);
    }


    function getNumber($length = 8)
    {
        $characters = '1234567890';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function uploadImage($file, $location, $size = null, $old = null, $thumb = null)
    {
        $path = makeDirectory($location);
        if (!$path) throw new Exception('File could not been created.');

        if (!empty($old)) {
            removeFile($location . '/' . $old);
            removeFile($location . '/thumb_' . $old);
        }
        $filename = uniqid() . time() . '.' . $file->getClientOriginalExtension();
        $image = Image::make($file);
        if (!empty($size)) {
            $size = explode('x', strtolower($size));
            $image->resize($size[0], $size[1],function($constraint){
                $constraint->upsize();
            });
        }
        $image->save($location . '/' . $filename);

        if (!empty($thumb)) {

            $thumb = explode('x', $thumb);
            Image::make($file)->resize($thumb[0], $thumb[1],function($constraint){
                $constraint->upsize();
            })->save($location . '/thumb_' . $filename);
        }
        return $filename;
    }
    
    function uploadFile($file, $location, $size = null, $old = null){
        $path = makeDirectory($location);
        if (!$path) throw new Exception('File could not been created.');

        if (!empty($old)) {
            removeFile($location . '/' . $old);
        }

        $filename = uniqid() . time() . '.' . $file->getClientOriginalExtension();
        $file->move($location,$filename);
        return $filename;
    }

    function makeDirectory($path)
    {
        if (file_exists($path)) return true;
        return mkdir($path, 0755, true);
    }

    function removeFile($path)
    {
        return file_exists($path) && is_file($path) ? @unlink($path) : false;
    }


    function getImage($image,$size = null)
    {
        $clean = '';
        $size = $size ? $size : 'undefined';
        if (file_exists($image) && is_file($image)) {
            return asset($image) . $clean;
        }else{
            return $image = 'https://via.placeholder.com/'.$size;
        }
    }




    function verificationCode($length)
    {
        if ($length == 0) return 0;
        $min = pow(10, $length - 1);
        $max = 0;
        while ($length > 0 && $length--) {
            $max = ($max * 10) + 9;
        }
        return random_int($min, $max);
    }


    function getAmount($amount, $length = 0)
    {
        if(0 < $length){
            return round($amount + 0, $length);
        }
        return 'Pkr '.$amount + 0;
    }

    function removeElement($array, $value)
    {
        return array_diff($array, (is_array($value) ? $value : array($value)));
    }


    function inputTitle($text)
    {
        return ucfirst(preg_replace("/[^A-Za-z0-9 ]/", ' ', $text));
    }


    function titleToKey($text)
    {
        return strtolower(str_replace(' ', '_', $text));
    }


    function str_slug($title = null)
    {
        return \Illuminate\Support\Str::slug($title);
    }

    function str_limit($title = null, $length = 10)
    {
        return \Illuminate\Support\Str::limit($title, $length);
    }

    function diffForHumans($date)
    {
        $lang = session()->get('lang');
        Carbon::setlocale($lang);
        return Carbon::parse($date)->diffForHumans();
    }

    function showDateTime($date, $format = 'd M, Y h:i A')
    {
        $lang = session()->get('lang');
        Carbon::setlocale($lang);
        return Carbon::parse($date)->translatedFormat($format);
    }
