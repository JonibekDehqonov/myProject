<div id="modal" class="modal">

                <div class="modalContent">
                    <span class="close">&times;</span>
                    <h3 class="modalH3">РЕГИСТРАТСИЯ</h3>
                    <form action="" method="post">
                        <div class="modInp ">
                            <p class="col-xl-5  mt-3">Номро дохил кунед</p><input type="text"
                                class="form-control   mt-3" placeholder="Ном">
                        </div>
                        <div class="modInp">
                            <p class="col-xl-5  mt-3">Паролро дохил кунед</p><input type="text"
                                class="form-control  mt-3" placeholder="Парол">
                        </div>
                        <button type="submit" class="btnModal btn btn-primary m-1 mt-2 col-xl-2">Дохилшудан</button>
                        <button type="button" class="btnRegizd btn btn-primary m-1 col-xl-4 ">Бақайдгирӣ</button>
                        <button type="submit" class="btnModal btn btn-primary m-1  col-xl-5 ">Барқароркуни парол</button>
                        </form>

                </div>
            </div> 


            <div id="modal2" class="modal2">
                <div class="modalContent2">
                    <span class="close close2">&times;</span>
                    <h3 class="modalH3">Бақайдгирӣ</h3>
                    <form action="includes/SMTP_PHP/sendmail.php" method="post">
                        <div class="modInp ">
                            <p class="col-xl-5  mt-3">Номро дохил кунед</p>
                            <input type="text"  name="name" class="form-control   mt-3" placeholder="Ном">
                        </div>
                        <div class="modInp ">
                            <p class="col-xl-5  mt-3">Насабро дохил кунед</p>
                            <input type="text"  name="name" class="form-control   mt-3" placeholder="Насаб">
                        </div>
                        
                        <div class="modInp">
                            <p class="col-xl-5  mt-3" >Паролро дохил кунед </p>
                            <input type="text" name="pass"  class="form-control  mt-3" placeholder="Парол">
                        </div>
                        <div class="modInp">
                            <p class="col-xl-5  mt-3" >Пароли худро тафтиш кунед</p>
                            <input type="text" name="pass"  class="form-control  mt-3" placeholder="Парол">
                        </div>

                        <div class="modInp">        
                            <p class="col-xl-5  mt-3" >Ввидите gmail</p>
                            <input type="gmail" name="gmail" class="form-control  mt-3" placeholder="google@gmail.com">
                        </div>
                        <button type="submit" name="submitContact" class="btnModal3 btn btn-primary m-1 mt-2 ">РЕГИСТРАТСИЯ</button>
                        <!-- <button type="button" class="btnRegizd btn btn-primary m-1 col-xl-4 ">Зрегистрировать</button> -->
                        <!-- <button type="submit" class="btnModal btn btn-primary m-1  col-xl-5 ">Забит парол логин</button> -->
                        </form>

                </div>
            </div> 
            <div id="modal3" class="modal3">
                <div class="modalContent">
                    <span class="close  close3">&times;</span>
                    <h3 class="modalH3">Ввидите парол из почта</h3>
                    <form action="includes/SMTP_PHP/sendmail.php" method="post">
                        <div class="modInp ">
                            <p class="col-xl-5  mt-3">Ввидите парол</p>
                            <input type="text"  name="passpochta" class="form-control   mt-3" placeholder="">
                        </div>
                        
                        <button type="submit" name="ok" class="btnModal btn btn-primary m-1 mt-2 ">OK</button>
                        </form>
                     </div>
            </div> 
        