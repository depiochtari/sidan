<body>
<table width="100%" border="0">
  <tr>
    <td width="10%" height="176"><img src="{{ url('images/logo.png') }}" width="100" height="100" /></td>
    <td width="80%">
              <center><p>SISTEM INFORMASI DATA ASURANSI NELAYAN</p>
              			<p>DINAS KELAUTAN DAN PERIKANAN</p>
                         <p> KABUPATEN KEBUMEN</p>
                         <p> Jalan Arungbinang No.21 Kebumen</p></center>
    </td>
    <td width="10%"><img src="{{ url('images/ikan.png') }}" width="100" height="100" /></td>
  </tr>
</table>
</body>
</html>

<div class="form-group{{ $errors->has('kn') ? ' has-error' : '' }}">
                            <label for="kn" class="col-md-4 control-label">KN</label>
                            <div class="col-md-6">
                                <input id="kn" type="text" class="form-control" name="kn" value="{{ old('kn') }}">
                                @if ($errors->has('kn'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('kn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                                @if ($errors->has('nama'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                                @if ($errors->has('alamat'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}">
                                @if ($errors->has('status'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kub') ? ' has-error' : '' }}">
                            <label for="kub" class="col-md-4 control-label">KUB</label>
                            <div class="col-md-6">
                                <input id="kub" type="text" class="form-control" name="kub" value="{{ old('kub') }}">
                                @if ($errors->has('kub'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('kub') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                            <label for="hp" class="col-md-4 control-label">HP</label>
                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control" name="hp" value="{{ old('hp') }}">
                                @if ($errors->has('hp'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bank') ? ' has-error' : '' }}">
                            <label for="bank" class="col-md-4 control-label">BANK</label>
                            <div class="col-md-6">
                                <input id="bank" type="text" class="form-control" name="bank" value="{{ old('bank') }}">
                                @if ($errors->has('bank'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('norek') ? ' has-error' : '' }}">
                            <label for="norek" class="col-md-4 control-label">No Rekening</label>
                            <div class="col-md-6">
                                <input id="norek" type="text" class="form-control" name="norek" value="{{ old('norek') }}">
                                @if ($errors->has('norek'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('norek') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Ahli Waris</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('suami') ? ' has-error' : '' }}">
                            <label for="suami" class="col-md-4 control-label">Nama Suami</label>

                            <div class="col-md-6">
                                <input id="suami" type="text" class="form-control" name="suami" value="{{ old('suami') }}">

                                @if ($errors->has('suami'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('suami') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                            <label for="nik" class="col-md-4 control-label">NIK</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ old('nik') }}">

                                @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status Hubungan</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}">

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                            <label for="hp" class="col-md-4 control-label">HP</label>

                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control" name="hp" value="{{ old('hp') }}">

                                @if ($errors->has('hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

