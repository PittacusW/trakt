<?php
namespace Contal\Trakt;
 
 use Goutte\Client as GoutteClient;
 use GuzzleHttp\Client as GuzzleClient;
class Client {

	protected $url;
	protected $token;
	protected $client;
public function __construct() {
		$this->url = 'https://api.trakt.tv/';
		$this->client = (new GoutteClient)->setClient((new GuzzleClient([
		 'timeout' => 30,
		 'verify'  => FALSE
	 ])));

	 /**
	 * Send a request
	 *
	 * @param  string $path
	 * @param  array  $parameters
	 * @return mixed
	 */
	protected function query($method, $path, array $parameters = []) {
	 
	 $this->client->setHeader('Content-type', 'application/json
');
	 $this->client->setHeader('trakt-api-key', config('trakt.client_id'));
	 $this->client->setHeader('trakt-api-version', 2);
	 if (!empty($this->token))
	  $this->client->setHeader('Authorization', "Bearer {$this->token}");
	 $this->client->request($method, $this->url . $path, $parameters);


	 return collect(json_decode($this->client->getResponse()->getContent(), TRUE));
	}
}