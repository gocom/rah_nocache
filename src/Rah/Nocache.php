<?php

/*
 * rah_nocache - No-cache plugin for Textpattern CMS
 * https://github.com/gocom/rah_nocache
 *
 * Copyright (C) 2022 Jukka Svahn
 *
 * This file is part of rah_nocache.
 *
 * rah_nocache is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, version 2.
 *
 * rah_nocache is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with rah_nocache. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Plugin class.
 */
final class Rah_Nocache
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->sendHeaders();
    }

    /**
     * Send no-cache HTTP headers.
     */
    public function sendHeaders(): void
    {
        header('Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0');
        header('Expires: Sat, 24 Jul 2003 05:00:00 GMT');
        header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
        header('Pragma: no-cache');
    }
}
