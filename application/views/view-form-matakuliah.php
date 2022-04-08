<html>

<head>
    <title>From Input Matakuliah</title>
</head>
    

<body>
    <center>
        <form action="http://localhost/pustaka-booking/Matakuliah/cetak "method="post">
        <table>
            <tr>
                <th>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:<th>
                <td>
                    <input type="text" name="kode" id="kode" value="<?php echo set_value('kode'); ?>">
                </td>
                <td><?php echo form_error('kode'); ?></td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <th>:<th>
                <td>
                    <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>">
                </td>
                <td><?php echo form_error('nama'); ?></td>
            </tr>
            <tr>
                <th>SKS</th>
                <th>:<th>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
                <td><?php echo form_error('sks'); ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <Input type="submit" value="Submit">
                </td>
            </tr>
        </table>
     </form>
  </center>
</body>

</html>