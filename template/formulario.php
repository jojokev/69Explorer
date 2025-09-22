<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticForm">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="staticBackdropLabel"><?php echo PearTheme::lang('Inquiry now','Consulta ahora','立即索取报价') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
                <div class="content">
                    <form action="#" data-action="<?php echo get_template_directory_uri()?>/inc/src/pear-email.php" class="row gy-3" id="fromInquire">
                        <div class="col-md-12">
                            <div class="position-relative">
                                <label for="Tour"
                                    class="form-label"><?php echo PearTheme::lang('Tour','Tour','旅行') ?></label>
                                <input type="text" name="tour" id="Tour" class="form-control rounded-0" value="<?php echo the_title() ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="name"
                                    class="form-label"><?php echo PearTheme::lang('Name','Nombre','姓名') ?></label>
                                <input type="text" name="name" id="name" class="form-control rounded-0" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="Lastname"
                                    class="form-label"><?php echo PearTheme::lang('Lastname','Apellidos','姓') ?></label>
                                <input type="text" name="lastname" id="Lastname" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative">
                                <label for="email"
                                    class="form-label"><?php echo PearTheme::lang('Email','Correo electrónico','电子邮件') ?></label>
                                <input type="email" name="email" id="email" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="country"
                                    class="form-label"><?php echo PearTheme::lang('Country','País','国家') ?></label>
                                <input type="text" name="country" id="country" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative">
                                <label for="phone"
                                    class="form-label"><?php echo PearTheme::lang('Phone or Mobile','Teléfono o Móvil','电话或手机') ?></label>
                                <input type="text" name="phone" id="phone" class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <label for="dateStart"
                                    class="form-label"><?php echo PearTheme::lang('Arrival Date','Fecha de llegada','抵达日期') ?></label>
                                <input type="text" name="dateStart" id="dateStart" class="form-control rounded-0 <?php echo PearTheme::lang('datebirthday','datebirthday','datebirthdayZh') ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <label for="typeservice"
                                    class="form-label"><?php echo PearTheme::lang('Service Type','Tipo de servicio','服务类型') ?></label>
                                <select name="typeService" id="typeservice" class="form-select">
                                    <option value="" selected>-<?php echo PearTheme::lang('Select','Seleccione','选择') ?>-</option>
                                    <option value="Private"><?php echo PearTheme::lang('Private','Privado','私人的') ?></option>
                                    <option value="Group"><?php echo PearTheme::lang('Group','Grupo','团体') ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <label for="travelers"
                                    class="form-label"><?php echo PearTheme::lang('Number of Participans','Número de participantes','参加人数') ?></label>
                                <input type="number" name="travelers" id="travelers" value="2" min="1" max="10"  class="form-control rounded-0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="position-relative">
                                <label for="comments"
                                    class="form-label"><?php echo PearTheme::lang('Questions and Comments','Preguntas y comentarios','问题和评论') ?></label>
                                <textarea name="comments" id="comments" class="form-control " row="3"></textarea>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger- rounded-0 me-3" data-bs-dismiss="modal" id="closed-inquiry-form"><?php echo PearTheme::lang('Close','Cerrar','关闭') ?></button>
                <button type="submit"
                    class="btn btn-primary position-relative  rounded-0 px-4 btn-sm text-uppercase letter-spacing-1 fw-bold loaded"
                    form="fromInquire"
                    ><?php echo PearTheme::lang('Send Form','Enviar formulario','发送表单') ?></button>
            </div>
        </div>
    </div>
</div>