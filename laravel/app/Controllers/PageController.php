<?php

namespace App\Controllers;

class PageController
{
    public function home()
    {
        return view('pages.home');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function setTheme()
    {
        $theme = $_POST['theme'] ?? 'classic';
        if (in_array($theme, config('theme.themes'))) {
            // Set a cookie with the selected theme
            setcookie('theme', $theme, time() + (86400 * 30), "/"); // 30 days expiration

            // Redirect back to the home page
            header('Location: /');
            exit;
        }
    }

    public function getCurrentTheme()
    {
        return $_COOKIE['theme'] ?? config('theme.default');
    }
}
