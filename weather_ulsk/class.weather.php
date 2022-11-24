<?

  
  class soWeather
  {
    const ApiURL         = 'https://api.openweathermap.org/data/2.5/';
    //введите свой ключ
    const ApiKey         = '';
    
    /**
	* Возвращает все данные о текущей погоде
	* 
	* https://openweathermap.org/current#current_JSON
	* 
	* @param int $id_city
	* 
	* @return object
	*/
    protected function _getCurrentWeatherAll($id_city)
    {
      // imperial metric
      $s = file_get_contents(self::ApiURL.'weather?id='.$id_city. '&units=metric&appid='.self::ApiKey.'&lang=ru');
      return json_decode($s);
    }

    /**
	* Возвращает нужные данные о текущей погоде
	* 
	* @param int $id_city
	* 
	* @return object
	*/
    protected function _getCurrentWeather($id_city)
    {
      $oRet = new stdClass();
      
      $oTMP = $this->_getCurrentWeatherAll($id_city);
      $oRet->temperature = $oTMP->main->temp;
      $oRet->pressure = $oTMP->main->pressure * 0.75008;
	  $oRet->windspeed = $oTMP->wind->speed;
	  $oRet->pogoda = $oTMP->weather[0]->description;
      
      return $oRet;
    }

    /**
	* Возвращает все данные о прогнозе погоды 
	* 
	* http://openweathermap.org/forecast5
	* 
	* @param int $id_city
	* 
	* @return object
	*/
    protected function _getForecastALL($id_city)
    {
      // imperial metric
      $s = file_get_contents(self::ApiURL.'forecast?id='.$id_city.'&units=metric&appid='.self::ApiKey);
      return json_decode($s);
    }

    /**
	* Возвращает нужные данные о прогнозе погоды 
	* 
	* @param int $id_city
	* 
	* @return array
	*/
    protected function _getForecast($id_city)
    {
      $aRet = array();

      $oForecast = $this->_getForecastALL($id_city);
      $i = 0;
      foreach($oForecast->list as $oRow)
	  {
	    $oTMP = new stdClass();
	    $oTMP->dt = date("H:i:s", $oRow->dt);
        $oTMP->temperature = $oRow->main->temp;
        $oTMP->pressure = $oRow->main->pressure * 0.75008;
		$oTMP->windspeed = $oRow->wind->speed;
	    $oTMP->pogoda = $oRow->weather[0]->description;
		$aRet[] = $oTMP;
		
		if($i > 6)
		{
		  break;
		}
		$i++;

	  }

      return $aRet;
    }

    /**
	* Возвращает все данные
	* 
	* @return object
	*/
    public function getWeatherData()
    {
      
      $id = 479123;

      
      $oRet = $this->_getForecast($id);

      return $oRet;
      
    }
    
  }