    <div class="modalblock add_table modal_add_NEW_INVOICE">
      <div class="modal_container">
        <div class="close_modal btn_close_NEW_INVOICE"><img src="css/images/close.png"></div>
        <div class="modal_title">
          Добавление накладной
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Номер накладной *</div>
              <div class="input">
                <input class="number_invoice" type="text" placeholder="Номер накладной">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Поставщик</div>
              <div class="input">
                <select class="seller">
                    <option selected>Выберите поставщика</option>
                  <option>LUBO</option>
                  <option>BDL</option>
                  <option>Пороги</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Товар</div>
              <div class="input">
                <select class="item_name" >
                  <option selected>Выберите товар</option>
                  <option>Обвесы</option>
                  <option>Фары</option>
                  <option>Поворотники</option>
                  <option>Другое</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Вес поставки</div>
              <div class="input">
                <input class="weight" type="text" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Объем поставки</div>
              <div class="input">
                <input class="volume" type="text" placeholder="">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Цена товара</div>
              <div class="input">
                <span class="dollar">$</span><input class="dollar_input item_coast" type="text"
                                                    placeholder="0">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Доставка по РФ</div>
              <div class="input">
                <span class="dollar">$</span><input class="dollar_input deliver_coast_to_RUSSIA" type="text"
                                                    placeholder="0">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Доставка до склада</div>
              <div class="input">
                <span class="dollar">$</span><input class="dollar_input deliver_coast_to_HOME"
                                                    type="text" placeholder="0">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Статус оплаты</div>
              <div class="input">
                <select class="status_of_payment">
                  <option>Оплачен</option>
                  <option>Не оплачен</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Дата отправки</div>
              <div class="input">
                <input class="dollar_input data_shipping_from_CHINA" type="text" placeholder="">
                <span class="date">
                    <img src="css/images/date.svg">
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Дата прибытия</div>
              <div class="input">
                <input class="dollar_input data_delivery_to_RUSSIA" type="text" placeholder="">
                <span class="date">
                    <img src="css/images/date.svg">
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Вид доставки</div>
              <div class="input">
                <select class="type_of_shipping">
                  <option>Самолет</option>
                  <option>Поезд</option>
                  <option>Авто</option>
                  <option>Море</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock">
              <div class="input_title">Статус доставки</div>
              <div class="input">
                <select class="stataus_delivery">
                  <option>Не отправлен</option>
                  <option>Отправлен</option>
                  <option>Доставлен</option>
                  <option>Прибыл в Москву</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock add_file">
              <div class="add_text">
                Прикрепить файл 
                                  <img src="css/images/add_file.svg">
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
            <div class="inputblock download_file">
              <div class="input_title">Загруженные файлы</div>
              <div class="input">
                Lubo order 22... .xls <span class="delete_file">
                    <img src="css/images/delete_file.svg">
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="buttons_block">
          <div class="row justify-content-center">
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <div class="button_save btn_save_NEW_INVOICE">
                Добавить
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>