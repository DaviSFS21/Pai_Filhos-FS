<?php
session_start();
if (isset($_SESSION['nome'])) {
  if ($_SESSION['verif_admin'] == 1) {
?>
    <script>
      alert("Redirecionando para a página de admin!");
      window.location.replace("../admin/index.php");
    </script>
<?php
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.3.1017/styles/kendo.common.min.css" />
  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.3.1017/styles/kendo.bootstrap.min.css" />

  <script src="https://kendo.cdn.telerik.com/2018.3.1017/js/jquery.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2018.3.1017/js/angular.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2018.3.1017/js/kendo.all.min.js"></script>
  <title>Área do Cliente - Pai & Filhos</title>
</head>

<body>
  <html>

  <div id="example" ng-app="KendoDemos">
    <div class="demo-section k-content">
      <div id="tabstrip">
        <ul>
          <li class="k-state-active">
          Usuário
          </li>
        </ul>
        <div>
          <h3 style="margin-top:0px;margin-bottom:0px;">Informações pessoais</h3>
          <form class="k-form">
            <div class="row">
              <div class="item">
                <span>Nome <span class="k-required">*</span></span>
                <input class="k-textbox" placeholder="Davi" />
              </div>
              <div class="item">
                <span>Sobrenome <span class="k-required">*</span></span>
                <input class="k-textbox" placeholder="Soares" />
              </div>
            </div>
            <br />
            <div style="clear:both;"></div>
            <div class="row">
              <div class="item">
                <span>Email <span class="k-required">*</span></span>
                <input class="k-textbox" placeholder="davi21@email.com" />
              </div>
              <div class="item">
                <span>Tel</span>
                <input kendo-masked-text-box ng-model="ssn" k-mask="'(12) 9999-9999'" />
              </div>
            </div>
            <div style="clear:both;"></div>
            <h3 style="margin-top:30px;margin-bottom:0px;">Informações sobre a conta</h3>
            <div class="row">
              <div class="item">
                <span>Usuário<span class="k-required">*</span></span>
                <input class="k-textbox" placeholder="jdoe" />
              </div>
              <div class="item" style="padding-top:30px;">
                <input type="checkbox" id="IntegratedAuth" ng-model="IntegratedAuth" ng-bind="IntegratedAuth" class="k-checkbox" />
                <label class="k-checkbox-label" for="IntegratedAuth">Integrated Authentication</label>
              </div>
              <div class="item" style="padding-top:24px;">
                <button class="k-button k-primary" ng-disabled="IntegratedAuth">Update Password</button>
              </div>
            </div>
            <div style="clear:both;"></div>
            <div class="row">
              <div class="item">
                <span>Account Begins</span>
                <input kendo-date-time-picker style="width: 100%;" />
              </div>
              <div class="item">
                <span>Account Ends</span>
                <input kendo-date-time-picker style="width: 100%;" />
              </div>
            </div>
            <div style="clear:both;"></div>
            <div class="row">
              <div class="item">
                <span>Account Description</span>
                <textarea class="k-textbox longitemnomargin"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="main.js"></script>
</body>

</html>