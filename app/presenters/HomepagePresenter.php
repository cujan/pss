<?php

namespace App\Presenters;

use Nette;
use App\Model;
use Nette\Application\UI\Form;
/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
    private $selection;
    public $condition = NULL;
    
     private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
	
	
    }
    
 
    public function renderDefault()
	{
	dump($this->condition);
	
	if ($this->condition) {
        $this->selection = $this->database->table('vysledok')->where('kodZiaka', $this->condition);
	dump($this->condition);
	    }
        $this->template->vysledky = $this->selection;
		 
	}
	
	public function renderDetail($id){
	    
	    $form['id']->setValue($id);
	   
	}

		protected function createComponentVysledokForm() {
	    $form = new Form();
	    $form -> addText('kodZiaka','Kód žiaka',40,100) ->setRequired('Zadajte prosím kód žiaka');
	    $form -> addSubmit('create', 'Výsledok');
	    $form -> onSuccess[] = $this->vysledokFormSubmitted;
	    return $form;
	}
	
	 public function vysledokFormSubmitted($form){
        $kodZiaka = $form->values['kodZiaka'];
	
	
	    $this->condition = $kodZiaka;
	}
	
	protected function createComponentPotvrdenieZapisuForm(){
	    $form = new Form();
	    $form->addHidden('id');
	    $form -> addSubmit('create', 'Potvrdzujem zápis');
	    $form -> onSuccess[] = $this->zapisFormSubmitted;
	    return $form;
	}
	
	
	public function zapisFormSubmitted($form){
	    dump($this->$idd);
	    }
}
