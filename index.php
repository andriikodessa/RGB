<?php
declare(strict_types=1);

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, $green, $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    private function setRed(int $red)
    {
        if ($red < 0 || $red > 255) {
            exit('Error');
        }
        $this->red = $red;
    }

    public function getRed(): int
    {
        return $this->red;
    }

    private function setGreen(int $green)
    {
        if ($green < 0 || $green > 255) {
            exit('Error');
        }
        $this->green = $green;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    private function setBlue(int $blue)
    {
        if ($blue < 0 || $blue > 255) {
            exit('Error');
        }
        $this->blue = $blue;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    public function equals($color):bool
    {
        return $this->getRed ()== $color->getRed ()  &&
            $this->getGreen ()== $color->getGreen () &&
            $this->getBlue ()== $color->getBlue ();
    }

    public function mix(Color $color):Color
    {
        return new Color(
            intdiv($this->getRed() + $color->getRed(), 2),
            intdiv($this->getGreen() + $color->getGreen(), 2),
            intdiv($this->getBlue() + $color->getBlue(), 2)
        );
    }
}

$color = new Color(200, 200, 200);

echo "<pre>";
var_dump($color);
echo "<pre>";

$mixedColor = $color->mix(new Color(100, 100, 100));

echo "<pre>";
var_dump($mixedColor);
echo "<pre>";

$mixedColor->getRed(); // 150

echo "<pre>";
echo $mixedColor -> getRed();
echo "<pre>";

$mixedColor->getGreen(); // 150

echo "<pre>";
echo $mixedColor -> getGreen();
echo "<pre>";

$mixedColor->getBlue(); // 150

echo "<pre>";
echo $mixedColor -> getBlue();
echo "<pre>";

echo "<pre>";
if (!$color->equals($mixedColor)) {
    echo 'Цвета не равны';
}
echo "<pre>";