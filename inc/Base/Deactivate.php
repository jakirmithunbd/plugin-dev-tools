<?php

namespace Jakir\Base;

class Deactivate {

    public static function deactivate() {
        flush_rewrite_rules();
    }
}
