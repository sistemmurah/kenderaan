@foreach($listperanan as $index => $row)
<tr>
    <td>{{ $index +1 }}</td>
    <td>{{ $row->id }}</td>
    <td>{{ $row->tkhCipta }}</td>
    <td>{{ $row->tkhHapus }}</td>
    <td>{{ $row->idtkhKemaskini }}</td>
</tr>
          @endforeach

                <?php
$nama1 = 'Ali';
$nama2 = "Alis";
echo "Nama saya $nama1";
echo "Nama saya";

if ( $nama1 == "Ali" ){

}
else if ( $nama2 == "Ali" ){

}

                ?>

// int[] javaArray1 = new int[]{1,2,3,4};
// int[] javaArray2;
// javaArray2 = new int[]{1,2,3,4};