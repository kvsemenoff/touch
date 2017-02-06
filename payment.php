<?php require_once('includes/header.php'); ?>
<?php /*require_once('includes/header_bottom2.php'); */?>
<section class="payment">
    <div class="container payment__container">
        <h2 class="payment__head">Оформление заказа</h2>
        <div class="payment_block">
            <table class="payment__personal-info">
                <tbody>
                    <tr>
                        <td class="personal__info-item">
                            <label for="user__name">Выберите имя</label>
                            <input type="text" class="payment__input" name="user__name" class="personal__info-text user__name">
                        </td>
                        <td class="personal__info-item">
                            <label for="user__family">Введите фамилию</label>
                            <input type="text" class="payment__input" name="user__family" class="personal__info-text user__family">
                        </td>
                        <td class="personal__info-item">
                            <label for="user__phone">Введите ваш телефон</label>
                            <input type="text" class="payment__input" name="user__phone" class="personal__info-text user__phone">
                        </td>
                        <td class="personal__info-item">
                            <label for="user__email">Введите ваш e-mail</label>
                            <input type="text" class="payment__input" name="user__email" class="personal__info-text user__email">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="payment__extra-info"></table>
        </div>
        <div class="payment__content"></div>
    </div>    
</section>
<?php require_once('includes/footer.php'); ?>
