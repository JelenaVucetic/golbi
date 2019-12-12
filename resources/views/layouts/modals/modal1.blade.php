 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog myModalDialog1">
    
        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" id="modalButton">&times;</button>
         
        <div class="modal-body myModalBody1">
            <div class="title">
                <h1>UPIT ZA ŠTAMPU</h1>
                
            </div>

            <div class="container" >
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss='alert'>x</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            
             
                    @if(session('succes_message')))
                    <div class="alert alert-success alert-block">
                        {{ session('succes_message') }}
                    </div> 
                    @endif 
                </div>
         

            <form method="post" action="/order-email#order" enctype="multipart/form-data" class="myForm1" >
                @csrf
                <div class="dinamicInput">
                    <input type="text" class="form-control" id="recipient-name" name="title" >
                </div>
               
                <textarea type="text" placeholder="Spcifikacija" name="specification" required></textarea>
                <label for="">* U ovom polju unesite informacije o željenom materijalu za štampu, debljini papira, da li želite štampu u boji ili crno-bijelu, da li želite doradu u vidu mat ili glossy plastifikacije i slično.</label>
                <input type="text" placeholder="Količina" name="number">
                <label for="">* Unesite željenu količinu.</label>
                <textarea type="text" placeholder="Dodatne informacije" name="info"></textarea>
                <label for="">* Ukoliko imate neke dodatne zahtjeve ili objašnjenja, unesite u polju "dodatne informacije".</label>
                <div class="uploadImage">
                    <img src="/images/uploadicon.svg" alt="">
                    <label class="custom-file-upload">
                            <input id="file-upload" type="file" name="document"/>
                        Upload
                    </label>
                </div>
                <label for="">* Pošaljite sliku dizajna ili primjera dizajna kakav želite.</label>

                <button type="submit">Pošaljite upit</button>
            </form>
        </div>
        
        </div>
        
    </div>
</div>