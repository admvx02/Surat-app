<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Surat Masuk</title>
  </head>
  <body>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-center">Laporan Surat Masuk</h4>
                    <table class="table">
                        <thead>
                            <th>No.</th>
                            <th>No. Surat</th>
                            <th>Pengirim</th>
                            <th style="text-align: center">Tanggal</th>
                            <th style="text-align: center">Diterima</th>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($item as $letter)
                            <tr>
                                <td>{{ $no++; }}</td>
                                <td>{{ $letter->letter_no }}</td>
                                <td>{{ $letter->sender->name }}</td>
                                <td style="text-align: center">{{ date('d-m-Y', strtotime($letter->letter_date)) }}</td>
                                <td style="text-align: center">{{ date('d-m-Y', strtotime($letter->date_received)) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.print();
        window.onafterprint = window.close;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>