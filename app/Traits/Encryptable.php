<?php

namespace App\Traits;

use Illuminate\Support\Facades\Crypt;

trait Encryptable
{
    public function setAttribute($key, $value)
    {
        if ($this->isEncryptable($key) && !is_null($value)) {
            $value = Crypt::encryptString($value);
        }

        return parent::setAttribute($key, $value);
    }

    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if ($this->isEncryptable($key) && !is_null($value)) {
            try {
                return Crypt::decryptString($value);
            } catch (\Throwable $e) {
                return $value; // already decrypted or plain
            }
        }

        return $value;
    }

    private function isEncryptable($key)
    {
        return property_exists($this, 'encryptable')
            && in_array($key, $this->encryptable, true);
    }
}
