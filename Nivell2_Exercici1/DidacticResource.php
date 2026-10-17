<?php
/*
Crea una classe que representi un recurs didàctic d’aquesta especialitat. 
Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) 
un URL i un tipus de recurs (Fitxer, Article web, Vídeo). 
Implementa tant el tema com el tipus de recurs amb enums.
*/
declare(strict_types=1);

enum Topic
{
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case Laravel;
}

enum ResourceType
{
    case Fitxer;
    case ArticleWeb;
    case Video;
}

class DidacticResource
{
    public function __construct(
        public string $name,
        public Topic $topic,
        public string $url,
        public ResourceType $type,
    ) {}
}