<?php

class StrUtils
{
    private string $str = 'anonyme';

    public function bold(string $str) {
        return $this->str = "<p style='font-weight: bold'>" . $str . "</p>";
    }

    public function italic(string $str) {
        return $this->str = "<p style='font-style: italic'>" . $str . "</p>";
    }

    public function underline(string $str) {
        return $this->str = "<p style='text-decoration-line: underline'>" . $str . "</p>";
    }

    public function capitalize(string $str) {
        return $this->str = "<p style='text-transform: capitalize'>" . $str . "</p>";
    }

    public function uglify(string $blabla) {
        echo $this->bold($blabla);
        echo $this->italic($blabla);
        echo $this->underline($blabla);
        echo $this->capitalize($blabla);


    }
}