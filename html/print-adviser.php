<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./header.php"?>
    <style type="text/css">
	@media print{
		#hid{
		   display: none; /* ซ่อน  */
		}
	}
</style>
</head>
<body>
    
                  
                  <div class="card mb-4">
                    <h5 class="card-header">แต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</h5>
                    
                    <div class="card-body">
                      <form action="" method="post">
                        <div class="mb-3 row">
                          <div class="mb-3 col-md-5">
                            <label >เลือกไฟล์แบบเสนอแต่งตั้งอาจารย์ระดับบัณฑิตศึกษาประจำ</label>
                            <div class="input-group">
                              <input type="file" class="form-control"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                              <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">ยืนยัน</button>
                            </div>
                          </div>
                          <div class="mb-3 col-md-5">
                            <label >เลือกไฟล์บันทึกข้อความ</label>
                            <div class="input-group">
                              <input type="file" class="form-control"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                              <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">ยืนยัน</button>
                            </div>
                          </div>
                        </div> 

                        <div class="mb-3 row">
                          <div class="mb-3 col-md-4">
                            <label >คณะ/วิทยาลัย/สถาบัน</label>
                            <div class="input-group">
                              <input  class="form-control" type="text" name="" id="">
                            </div>
                          </div>
                          
                        </div> 

                        <div class="mb-3 row">
                        <div class="mb-3 col-sm-2">
                            <label >คำนำหน้าชื่อ</label>
                            <select name="selectTypeSta" class="form-select color-dropdown">
                                  <option value="0"  selected>---</option>
                                  <option value="1" >นาย</option>
                                  <option value="2" >นางสาว</option>
                                  <option value="3" >นาง</option>
                                </select>
                          </div>
                          <div class="mb-3 col-md-3">
                            <label >1.เสนอ ชื่อ</label>
                              <div class="input-group">
                                <input  class="form-control" type="text" name="" id="">
                              </div>
                          </div>
                          <div class="mb-3 col-md-3">
                            <label >นามสกุล</label>
                              <div class="input-group">
                                <input  class="form-control" type="text" name="" id="">
                              </div>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <div class="list-group">
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              2.ความเห็นของภาควิชา
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                3. ผลการพิจารณาของคณะกรรมการบัณฑิตศึกษาประจำคณะ 
                                <div class="mb-3 row">
                                  <div class="mb-3 col-md-1">
                                  <label >ครั้งที่</label>
                                    <div class="input-group">
                                      <input  class="form-control" type="text" name="" id="">
                                    </div>
                                  </div>
                                  <div class="mb-3 col-md-2">
                                  <label >ครั้งที่</label>
                                    <div class="input-group">
                                      <input class="form-control" type="date" name="" id="">
                                    </div>
                                  </div>
                                </div>
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              4.ประสบการณ์การทำงาน (รวมถึงประสบการณ์การเป็นอาจารย์พิเศษ/ผู้ทรงคุณวุฒิ/ที่ปรึกษาให้กับสถาบันต่างๆ)
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              5. ผลงานทางวิชาการ
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              6. รางวัล/เกียรติบัตร/ประกาศเกียรติคุณ/อื่นๆ ที่เคยได้รับ
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              7. ความเชี่ยวชาญพิเศษ
                            </label>
                          </div>
                        </div> 

                        <div class="mt-2">
                          
                          <button id="hid" onclick="window.print();" class="btn btn-primary"> print </button>

                        </div>
                      </form>

                    </div>
                  
    

</body>
</html>