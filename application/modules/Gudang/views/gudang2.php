<?php 
                    foreach ($hasil as $hasilx) {
                    if($hasilx->kategori==1){

                      $cat = "Furniture"; $cate="FUR";
                      

                    }
                    elseif ($hasilx->kategori==2) {
                      $cat = "Komputer"; $cate="KOM";
                    }

                    else{

                      $cat = "Others";$cate="OTHERS";
                    }

                    if ($hasilx->jenis_aktiva==1) {
                      $masa_aktif=4;
                    }
                    elseif ($hasilx->jenis_aktiva==2) {
                     $masa_aktif=8;
                    }
                    else {
                      $masa_aktif=12;
                    }

                   // $hasilx->susut_bulan=$hasilx->susut_tahun/12;

                    $hasilx->status="Available";

                    
                    echo "<tr><td>".$cate."-0".$hasilx->id_barang."-I-HO-2017 </td>
                    <td>".$hasilx->nama_barang."</td>
                    <td>".$hasilx->tanggal_masuk."</td>
                    <td>".$hasilx->unit."</td>
                    <td>".$hasilx->harga_awal."</td>
                    <td>".$hasilx->total_harga."</td>
                    <td>".$cat."</td>
                    <td>"."Kelompok ".$hasilx->jenis_aktiva."</td>
                    <td>".$hasilx->masa_manfaat." Tahun"."</td>
                    <td>".$hasilx->susut_tahun."</td>
                    <td>".$hasilx->susut_bulan."</td>
                    <td>".$hasilx->nilai_buku."</td>
                    <td>".$hasilx->status."</td></tr>";
                }

                  ?> <input type="submit" name="edit" value="edit"> 