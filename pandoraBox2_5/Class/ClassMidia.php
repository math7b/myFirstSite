<?php

Class ClassMidia extends PDO {
    private $midiaId, $tipoMidia, $tipoConteudo, $nomeCompleto, $nomeCapa, $imgCapa, $anoLancamento, $numEpisodios, $numTemporadas, $genero, $duracao, $faixaEtaria, $descri, $linkMidia, $linkAmv, $linkTrailer;

// GETs and SETs
    public function GetMidiaId(){
        return $this->midiaId;
    }
    public function SetMidiaId($value){
        $this->midiaId = $value;
    }
    
    public function GetTipoMidia(){
        return $this->tipoMidia;
    }
    public function SetTipoMidia($value){
        $this->tipoMidia = $value;
    }
    
    public function GetTipoConteudo(){
        return $this->tipoConteudo;
    }
    public function SetTipoConteudo($value){
        $this->tipoConteudo = $value;
    }

    public function GetNomeCompleto(){
        return $this->nomeCompleto;
    }
    public function SetNomeCompleto($value){
        $this->nomeCompleto = $value;
    }

    public function GetNomeCapa(){
        return $this->nomeCapa;
    }
    public function SetNomeCapa($value){
        $this->nomeCapa = $value;
    }

    public function GetImgCapa(){
        return $this->imgCapa;
    }
    public function SetImgCapa($value){
        $this->imgCapa = $value;
    }
    
    public function GetAnoLancamento(){
        return $this->anoLancamento;
    }

    public function SetAnoLancamento($value){
        $this->anoLancamento = $value;
    }
    
    public function GetNumEpisodios(){
        return $this->numEpisodios;
    }
    public function SetNumEpisodios($value){
        $this->numEpisodios = $value;
    }

    public function GetNumTemporadas(){
        return $this->numTemporadas;
    }
    public function SetNumTemporadas($value){
        $this->numTemporadas = $value;
    }

    public function GetGenero(){
        return $this->genero;
    }
    public function SetGenero($value){
        $this->genero = $value;
    }

    public function GetDuracao(){
        return $this->duracao;
    }
    public function SetDuracao($value){
        $this->duracao = $value;
    }

    public function GetFaixaEtaria(){
        return $this->faixaEtaria;
    }
    public function SetFaixaEtaria($value){
        $this->faixaEtaria = $value;
    }

    public function GetDescri(){
        return $this->descri;
    }
    public function SetDescri($value){
        $this->descri = $value;
    }
    
    public function GetLinkMidia(){
        return $this->linkMidia;
    }
    public function SetLinkMidia($value){
        $this->linkMidia = $value;
    }

    public function GetLinkAmv(){
        return $this->linkAmv;
    }
    public function SetLinkAmv($value){
        $this->linkAmv = $value;
    }

    public function GetLinkTrailer(){
        return $this->linkTrailer;
    }
    public function SetLinkTrailer($value){
        $this->linkTrailer = $value;
    }
//

    public function GetAnime(){
        $sql = "SELECT * FROM midia WHERE tipo_midia = 'anime' ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetSerie(){
        $sql = "SELECT * FROM midia WHERE tipo_midia = 'serie' ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetFilme(){
        $sql = "SELECT * FROM midia WHERE tipo_midia = 'filme' ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetMidiaPorId($midiaId){
        $sql = "SELECT * FROM midia WHERE midiaId = $midiaId";
        return $this->query($sql);
    }

    public function GetAnimeCardPendente(){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);

        $sql = "SELECT * FROM midia M, pendentes P
                    WHERE   P.FK_usuarioId = '$usuarioId'   && 
                            M.midiaId = P.FK_midiaId        && 
                            M.tipo_midia = 'anime'
                ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetSerieCardPendente(){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);

        $sql = "SELECT * FROM midia M, pendentes P
                    WHERE   P.FK_usuarioId = '$usuarioId'   && 
                            M.midiaId = P.FK_midiaId        && 
                            M.tipo_midia = 'serie'
                ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetFilmeCardPendente(){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);

        $sql = "SELECT * FROM midia M, pendentes P
                    WHERE   P.FK_usuarioId = '$usuarioId'   && 
                            M.midiaId = P.FK_midiaId        && 
                            M.tipo_midia = 'filme'
                    ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetAnimeCardFavorito(){        
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);

        $sql = "SELECT * FROM midia M, favoritos F 
                    WHERE   F.FK_usuarioId = '$usuarioId'   && 
                            M.midiaId = F.FK_midiaId        && 
                            M.tipo_midia = 'anime'
                    ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetSerieCardFavorito(){        
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);

        $sql = "SELECT * FROM midia M, favoritos F 
                    WHERE   F.FK_usuarioId = '$usuarioId'   && 
                            M.midiaId = F.FK_midiaId        &&
                            M.tipo_midia = 'serie'
                    ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetFilmeCardFavorito(){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);

        $sql = "SELECT * FROM midia M, favoritos F 
                    WHERE   F.FK_usuarioId = '$usuarioId'   && 
                            M.midiaId = F.FK_midiaId        && 
                            M.tipo_midia = 'filme'
                    ORDER BY nome_capa";
        return $this->query($sql);
    }

    public function GetPendentesPorId($midiaId){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);
        $sql =" SELECT pendenteId FROM pendentes WHERE FK_midiaId = $midiaId && FK_usuarioId='$usuarioId'";
        $result = $this->query($sql);
        while( $linha = $result->fetchObject() ) {
            return $linha->pendenteId;
        }
    }

    public function GetFavoritosPorId($midiaId){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);
        $sql =" SELECT favoritoId FROM favoritos WHERE FK_midiaId = $midiaId && FK_usuarioId='$usuarioId'";
        $result = $this->query($sql);
        while( $linha = $result->fetchObject() ) {
            return $linha->favoritoId;
        }
    }

    public function AddMidia($nome_completo, $nome_capa, $ano_lancamento, $num_episodios, $num_temporadas, $num_temporada, $img_capa, $genero, $duracao, $link_midia, $link_intru, $link_amv, $descri, $tipo_conteudo, $faixa_etaria, $link_trailer, $tipo_midia) {
        $data_adicao = $this->GetDate();
        $sql = "INSERT INTO midia(  nome_completo, nome_capa, ano_lancamento, num_episodios, num_temporadas, num_temporada, img_capa, genero, duracao, link_midia, link_intru, link_amv, descri, tipo_conteudo, faixa_etaria, link_trailer, tipo_midia, data_adicao)
        VALUES( '$nome_completo', '$nome_capa', '$ano_lancamento', '$num_episodios', '$num_temporadas', '$num_temporada', '$img_capa', '$genero', '$duracao', '$link_midia', '$link_intru', '$link_amv', '$descri', '$tipo_conteudo', '$faixa_etaria', '$link_trailer', '$tipo_midia', '$data_adicao')";
        $result = $this->query($sql);
        print_r($result);
        return true;
    }

    public function EditarMidia($midiaId, $nome_completo, $nome_capa, $ano_lancamento, $num_episodios, $num_temporadas, $num_temporada, $img_capa, $genero, $duracao, $link_midia, $link_intru, $link_amv, $descri, $tipo_conteudo, $faixa_etaria, $link_trailer, $tipo_midia){
        $data_modificacao = $this->GetDate();
        $sql = "UPDATE midia SET nome_completo='$nome_completo', nome_capa='$nome_capa', ano_lancamento='$ano_lancamento', num_episodios='$num_episodios', num_temporadas='$num_temporadas', num_temporada='$num_temporada', img_capa='$img_capa', genero='$genero', duracao='$duracao', link_midia='$link_midia', link_intru='$link_intru', link_amv='$link_amv', descri='$descri', tipo_conteudo='$tipo_conteudo', faixa_etaria='$faixa_etaria', link_trailer='$link_trailer', tipo_midia = '$tipo_midia', data_modificacao = '$data_modificacao'
                WHERE midiaId='$midiaId'";
        $this->query($sql);
        return true;
    }

    public function DeleteMidia($midiaId){
        $sql = "DELETE FROM midia WHERE midiaId=$midiaId";
        $this->query($sql);
        return true;
    }

    public function AltPendente($midiaId){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);

        $sql = "SELECT * FROM pendentes P 
                WHERE P.FK_usuarioId = '$usuarioId' && P.FK_midiaId = '$midiaId'";
        $result = $this->query($sql);

        if( $result->rowCount() > 0 ) {
            $sql = "DELETE FROM pendentes WHERE FK_midiaId = '$midiaId'";
            return $this->query($sql);
            print_r($sql);
        } else {
            $sql = "INSERT INTO pendentes (FK_midiaId, FK_usuarioId) VALUES ('$midiaId', '$usuarioId')";
            print_r($sql);
            return $this->query($sql);
        }
    }

    public function AltFavorito($midiaId){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);
        
        $sql = "SELECT * FROM favoritos F 
                WHERE F.FK_usuarioId = '$usuarioId' && F.FK_midiaId = '$midiaId'";
        $result = $this->query($sql);

        if( $result->rowCount() > 0 ) {
            $sql = "DELETE FROM favoritos WHERE FK_midiaId = '$midiaId'";
            return $this->query($sql);
        } else {
            $sql = "INSERT INTO favoritos (FK_midiaId, FK_usuarioId) VALUES ('$midiaId', '$usuarioId')";
            return $this->query($sql);
        }
    }

    public function CheckPendenteFavorito($midiaId){
        $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
        $usuarioId = $user->GetUserPorId($_SESSION['usuario']);
        
        $sql = "SELECT FK_midiaId FROM pendentes WHERE FK_midiaId=$midiaId && FK_usuarioId=$usuarioId";
        $result = $this->query($sql);
        print_r($result);
        if( $result->rowCount() > 0 ) {
            return true;
        } else {
            $sql = "SELECT FK_midiaId FROM favoritos WHERE FK_midiaId=$midiaId && FK_usuarioId=$usuarioId";
            $result = $this->query($sql);
            print_r($result);
            if( $result->rowCount() > 0 ) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function GetDate(){
        $sql = "SELECT CURDATE() AS date";
        $result = $this->query($sql);
        while( $linha = $result->fetchObject() ) {
            return $linha->date;
        }
    }
}
?>
