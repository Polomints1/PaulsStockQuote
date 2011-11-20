<?php



class YahooStocks

{



  private $yahooURL = "http://download.finance.yahoo.com/d/quotes.csv?s=";

	

	public function getStock($tickers)

	{

		$url = sprintf($this->yahooURL . "%s&f=sl1c1", $tickers);	

		return readfile($url);

	}



}



$yahooStocks = new YahooStocks();

print $yahooStocks->getStock($_GET['tickers']);



?>