<?php

namespace App\Http\Services;

use App\Models\Record;
use Exception;
use Illuminate\Support\Facades\DB;
use Str;

class UrlService
{
  public function __construct(private Record $record) {}

  public function storeUrl(array $request)
  {
    DB::beginTransaction();

    try {

      $url = $this->record->create([
        'url' => $request['url'],
        'enc_url' => url(Str::random(6))
      ]);
      if (!$url) {
        throw new Exception("Erro ao encurtar url!");
      }

      DB::commit();

      return [
        'error' => false,
        'msg' => 'Url encurtada com sucesso!',
        'dados' => $url
      ];
    } catch (Exception $error) {
      DB::rollBack();

      return [
        'error' => true,
        'msg' => $error->getMessage()
      ];
    }
  }

  public function findUrl(string $url_enc)
  {
    try {
      $url = $this->record->where('enc_url', url($url_enc))->first();
      if (!$url) {
        throw new Exception("Url não encontrada!");
      }

      return $url;
    } catch (Exception $error) {
      return [
        'error' => true,
        'msg' => $error->getMessage()
      ];
    }
  }
}
