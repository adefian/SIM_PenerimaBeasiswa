<div class="modal fade" tabindex="-1" role="dialog" id="modalCreate">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="{{ route('mahasiswa.store') }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <div class="input-group">
                            <input name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <input name="username" type="text" class="form-control" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <div class="input-group">
                            <input name="nim" type="text" class="form-control" placeholder="NIM" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <div class="input-group">
                            <input name="nik" type="text" class="form-control" placeholder="NIK" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <select class="form-control" name="prodi">
                            <option value="" selected disabled>- Prodi -</option>
                            @foreach ($prodi as $prodi)
                                <option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Kelas</label>
                        <div class="input-group">
                            <input name="kelas" type="text" class="form-control" maxlength="4" placeholder="Kelas"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <div class="input-group">
                            <input name="semester" type="text" class="form-control" placeholder="Semester" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ipk">IPK</label>
                        <div class="input-group">
                            <input type="text" name="ipk" class="form-control" maxlength="4" placeholder="IPK" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto KHS terakhir</label>
                        <div class="input-group">
                            <input type="file" name="foto_khs" class="file-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Telepon</label>
                        <div class="input-group">
                            <input type="text" name="no_hp" class="form-control" placeholder="No Telepon" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_wa">No WhatsApp</label>
                        <div class="input-group">
                            <input type="text" name="no_wa" class="form-control" placeholder="No WhatsApp" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-success">Tambah</button>
                        <button type="button" class="btn btn-sm btn-secondary float-right"
                            data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
