<div class="cart-drawer" id="cart-drawer">
    <form action="https://spacingtech.com/cart" method="post" class="drawer-contents">
        <div class="drawer-fixed-header">
            <div class="drawer-header">
                <h6 class="drawer-header-title">Giỏ hàng</h6>
                <div class="drawer-close">
                    <button type="button" class="drawer-close-btn"><span class="drawer-close-icon"><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></button>
                </div>
            </div>
        </div>

       @livewire('client.component.cart-item')
    </form>
</div>


