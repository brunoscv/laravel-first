<?php

namespace App\Utils;

use Barryvdh\DomPDF\Facade as DomPDF;

class PDF
{

    public static $defaultView = 'pdf.clean';

    public static function replaceUrlAssets($html)
    {

        if (
            isset($_SERVER['HTTPS']) &&
            ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
            isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
            $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
        ) {
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }

        $path = '"' . $protocol . $_SERVER['SERVER_NAME'] . '/assets';
        $html = str_replace('"/assets', $path, $html);

        return $html;
    }

    public static function isJson($string)
    {

        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }

    public static function sanitizeString($string)
    {
        return str_replace('.', '', strip_tags($string));
    }

    public static function getHtmlFromJson($html, $replaceAssets = true)
    {

        if (self::isJson($html)) {

            $html = json_decode($html);
        }

        if ($html && is_object($html) && property_exists($html, 'html')) {

            $html = $html->html;
        }

        if ($replaceAssets) {

            $html = self::replaceUrlAssets($html);
        }

        return $html;
    }

    public static function loadHtml($html, $view)
    {

        $pdf = DomPDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'isPhpEnabled' => true]);

        if (!$view && is_string($html) && strpos($html, '<html>')) {

            $pdf->loadHtml($html);
        } else {

            if (!$view) $view = self::$defaultView;

            $pdf->loadView($view, ['htmlPdfContent' => $html]);
        }

        return $pdf;
    }

    /**
     * @param array $data
     * @param $view
     * @param string $mode options view, save, download
     * @param string $pathName
     * @return mixed
     */
    public static function loadView(array $data, $view, $mode = 'view', $pathName = 'public/export.pdf')
    {

        $pdf = DomPDF::setOptions(
            [
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
                'isPhpEnabled' => true,
                "dpi" => 200]);

        $pdf->setPaper('letter', 'portrait');

        $pdf->getDomPDF()->setHttpContext(
            stream_context_create([
                'ssl' => [
                    'allow_self_signed' => TRUE,
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                ]
            ])
        );

        $pdf->loadView($view, $data);

        switch ($mode) {
            case 'save':
                return $pdf->save($pathName);
            case 'download':
                return $pdf->download($pathName);
            case 'show':
                return $pdf->output($pathName);
        }

        return $pdf->stream();
    }

    public static function showPDF($html, $view = null)
    {

        $html = self::getHtmlFromJson($html);

        $pdf = self::loadHtml($html, $view);

        return $pdf->stream();
    }

    public static function download($html, $name = 'download', $view = 'pdf.clean')
    {

        $html = self::getHtmlFromJson($html);

        $pdf = self::loadHtml($html, $view);

        $name = self::sanitizeString($name);

        return $pdf->download($name . '.pdf');
    }

    public static function save($html, $pathAndName = null, $view = 'pdf.clean')
    {

        $html = self::getHtmlFromJson($html, false);

        $htmlToSave = self::replaceUrlAssets($html);

        $pdf = self::loadHtml($htmlToSave, $view);

        $pdf->save($pathAndName);

        return $html;
    }


}
