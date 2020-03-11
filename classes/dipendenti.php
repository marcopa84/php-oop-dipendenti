<!-- Crea e modellizza classi per gestire i dipendenti di un’azienda. -->

<?php
class Dipendente
{
    private $matricola;
    private $nome;
    private $cognome;
    private $indirizzo;
    private $cf;
    private $iban;
    private $mansioneId;
    public function __construct($_matricola, $_nome, $_cognome, $_indirizzo, $_cf, $_iban, $_mansioneId)
    {
        $this->matricola = $_matricola;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo = $_indirizzo;
        $this->cf = $_cf;
        $this->iban = $_iban;
        $this->mansioneId = $_mansioneId;
    }
    public function visualizzaDipendente() {
        return $result = [
            'Matricola'=> $this->matricola,
            'Nome'=> $this->nome,
            'Cognome'=> $this->cognome,
            'Indirizzo'=> $this->indirizzo,
            'Codice Fiscale'=> $this->cf,
            'Iban di addebito'=> $this->iban
        ];
    }
}