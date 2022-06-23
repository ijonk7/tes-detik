<h1>Persyaratan Teknis:</h1>
<ul>
    <li>Apache/Nginx</li>
    <li>PHP 8.0.2</li>
    <li>MySQL 8.0.21</li>
</ul>

<h1>Panduan Penggunaan:</h1>
<ol>
    <li>Buat Database MySQL dengan nama "tes_detik_com"</li>
    <li>Import file "tes_detik_com.sql" ke dalam Database</li>
    <li>
        Gunakan PHP CLI untuk membuat sejumlah kode ticket berdasarkan Event id, dengan contoh syntax di bawah ini.
        <div>Contoh :</div>
        <ul>
            <li>php index.php {event_id} {total_ticket}</li>
            <li>php index.php 2 3000</li>
        </ul>
        <div>Dengan contoh di atas, maka akan membuat kode tiket unik sebanyak 3000 dengan event_id 2 ke dalam database.</div>      
    </li>
    <li>
        Untuk mengecek status kode ticket melalui API, gunakan:
        <ul>
            <li>Method: GET</li>
            <li>Params:
                <ul>
                    <li>event_id: integer</li>
                    <li>ticket_code: string</li>
                </ul>
            </li>
            <li>
                URL: https://tes-detik-com.test/check-code-ticket.php
                <div>Contoh:</div>
                <ul>
                    <li>https://tes-detik-com.test/check-code-ticket.php?event_id=3&ticket_code=DTKJJTFMO5</li>
                </ul>
            </li>
        </ul>          
    </li>
    <li>
        Untuk merubah status kode ticket melalui API, gunakan:
        <ul>
            <li>Method: POST</li>
            <li>Params:
                <ul>
                    <li>event_id: integer</li>
                    <li>ticket_code: string</li>
                    <li>status: string</li>
                </ul>                  
            </li>
            <li>URL: https://tes-detik-com.test/update-status-ticket.php</li>
        </ul>
    </li>
</ol>