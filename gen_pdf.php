<?php
    require('tfpdf/tfpdf.php');

    $link = new mysqli("localhost", "f0474370_RKVGames", "1123", "f0474370_RKVGames");
    if ($link->connect_errno) {
        echo "Не удалось подключиться к серверу";
    }

    $pdf = new tFPDF();
    $pdf->AddFont('PDFFont','','pixel.ttf');
    $pdf->SetFont('PDFFont','',12);
    $pdf->AddPage();

    $pdf->Cell(80);
    $pdf->Cell(30,10,'Игры',1,0,'C');
    $pdf->Ln(20);

    $pdf->SetFillColor(200,200,200);
    $pdf->SetFontSize(6);

    $header = array("п/п","Название","Жанр","Разработчик","Издатель","Ключ","Дата приобретения","Дата окончания","URL магазина");
    $w = array(6,30,25,25,25,20,20,17,25);
    $h = 10;
    for ($c = 0; $c < 9; $c++){
        $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);
    }
    $pdf->Ln();

    // Запрос на выборку сведений о пользователях
    $result = $link->query("SELECT
        Games.name as game_name,
        Games.genre as game_genre,
        Games.autor as game_autor,
        Games.publisher as game_publisher,
        `Keys`.id_key,
        `Keys`.key_buy,
        `Keys`.key_end,
        Stores.url_store as store_url
        FROM `Keys`
        LEFT JOIN Games ON `Keys`.id_game=Games.id_game
        LEFT JOIN Stores ON `Keys`.id_store=Stores.id_store"
    );

    if ($result){
        $counter = 1;
        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
            $pdf->Cell($w[1],$h,$row[0],'LRB');

            for ($c = 2; $c < 9; $c++){
                if ($c==6 || $c==7){
                    $row[$c-1] = date('d-m-Y', strtotime($row[$c-1]));
                }
                $pdf->Cell($w[$c],$h,$row[$c-1],'RB');
            }
            $pdf->Ln();
            $counter++;
        }
    }

    $pdf->Output("I",'Games.pdf',true);
?>