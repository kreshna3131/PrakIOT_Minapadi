import MySQLdb
import time
import datetime
from datetime import datetime
import random

database = MySQLdb.connect("localhost", "root", "", "db_minapadi")
cursor = database.cursor()

sql2 = cursor.execute("select count(*) from tb_set_poin")
data = cursor.fetchone()

jml = data[0]
w = 1

# Jenis Ikan
print("=====Jenis Ikan======")
while w < jml+1:
    z = str(w)
    sql = cursor.execute(
        "select nama_ikan from tb_set_poin where id_ikan ='"+z+"'")
    ikan = cursor.fetchone()
    t = str(ikan[0])
    print(w, t)
    w += 1
nm_ikan = str(input("Masukkan Nama Ikan : "))

# Pilih Sensor
print("=======Sensor======")
print("1.PH")
print("2.Suhu Air")
print("3.Tinggi Air")

sensor = int(input("Sensor Yang Dipilih :"))

lama_pengecekan = input("Jangka Waktu : ")
jumlah_pengecekan = input("Jumlah Pengecekan : ")

a = cursor.execute(
    "select * from tb_set_poin where nama_ikan like '%"+nm_ikan+"%'")
b = nm_ikan
id_ikan = str(b)[0]

c = cursor.execute(
    "select nama_ikan from tb_set_poin where id_ikan like "+nm_ikan+"")
d = cursor.fetchone()
namaa_ikan = str(d[0])


# sensor PH
if sensor == 1:
    pilih_tabel = 'tb_ph'
    nilai = 0
    # jps(jumlah pengecekan sensor)
    jps = int(jumlah_pengecekan)
    # wps(waktu pengecekan sensor)
    wps = int(lama_pengecekan)
    nilai_max = jps
    while nilai < nilai_max:
        ph = str(random.randint(0, 14))
        t_end = time.time() + 60 * wps
        v = 0
        tbl_ph = []

        while time.time() < t_end:
            print("-----")
            v += 1

        waktu = str(datetime.now())
        info_ph = id_ikan, namaa_ikan, waktu, ph
        tbl_ph.append(info_ph)
        sq = "insert into "+pilih_tabel + \
            " (id_ikan,nama_ikan,waktu,ph) values (%s,%s,%s,%s)"
        inpt = cursor.executemany(sq, tbl_ph)
        print("Data Pengecekan Berhasil", tbl_ph)

        nilai += 1


# Sensor Suhu
if sensor == 2:
    pilih_tabel = 'tb_suhu'
    nilai = 0
    jps = int(jumlah_pengecekan)
    wps = int(lama_pengecekan)
    nilai_max = jps
    while nilai < nilai_max:
        ph = str(random.randint(10, 37))
        t_end = time.time() + 60 * wps
        v = 0
        tbl_ph = []

        while time.time() < t_end:
            print("-----")
            v += 1

        waktu = str(datetime.now())
        inp_ph = id_ikan, namaa_ikan, waktu, ph
        tbl_ph.append(inp_ph)
        sq = "insert into "+pilih_tabel + \
            " (id_ikan,nama_ikan,waktu,suhu) values (%s,%s,%s,%s)"
        inpt = cursor.executemany(sq, tbl_ph)
        print("Data Pengecekan Berhasil", tbl_ph)

        nilai += 1


# SENSOR TINGGI
if sensor == 3:
    pilih_tabel = 'tb_tinggi_air'
    nilai = 0
    jps = int(jumlah_pengecekan)
    wps = int(lama_pengecekan)
    nilai_max = jps
    while nilai < nilai_max:
        ph = str(random.randint(10, 50))
        t_end = time.time() + 60 * wps
        v = 0
        tbl_ph = []

        while time.time() < t_end:
            print("-----")
            v += 1

        waktu = str(datetime.now())
        inp_ph = id_ikan, namaa_ikan, waktu, ph
        tbl_ph.append(inp_ph)
        sq = "insert into "+pilih_tabel + \
            " (id_ikan,nama_ikan,waktu,tinggi_air) values (%s,%s,%s,%s)"
        inpt = cursor.executemany(sq, tbl_ph)
        print("Data Pengecekan Berhasil", tbl_ph)

        nilai += 1


database.commit()
database.close()
