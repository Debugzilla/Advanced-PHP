<?php


// Definición de enums fuera de la clase
enum Tema: string {
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}

enum TipoRecurso: string {
    case Fitxer = 'Fitxer';
    case ArticleWeb = 'Article web';
    case Video = 'Video';
}

class RecursoDidactico {
    public string $titulo; // Definir tipo de datos
    public Tema $tema;     // Definir tipo de datos
    public string $url;    // Definir tipo de datos
    public TipoRecurso $tipoRecurso; // Definir tipo de datos

    public function __construct(string $titulo, Tema $tema, string $url, TipoRecurso $tipoRecurso) {
        $this->titulo = $titulo;
        $this->tema = $tema;
        $this->url = $url;
        $this->tipoRecurso = $tipoRecurso;
    }

    public function mostrarRecurso() {
        echo "Titulo: " . $this->titulo . "<br/>";
        echo "Tema: " . $this->tema->value . "<br/>";
        echo "URL: " . $this->url . "<br/>";
        echo "Tipo: " . $this->tipoRecurso->value . "<br/><br/>";
    }
}




?>