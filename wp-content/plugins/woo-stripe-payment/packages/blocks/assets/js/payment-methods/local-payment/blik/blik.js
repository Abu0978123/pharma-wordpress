import {registerPaymentMethod} from '@woocommerce/blocks-registry';
import {getSettings} from "../../util";
import {PaymentMethod, PaymentMethodLabel} from "../../../components/checkout";
import {canMakePayment, LocalPaymentIntentContent} from "../local-payment-method";

const getData = getSettings('stripe_blik_data');

if (getData()) {
    registerPaymentMethod({
        name: getData('name'),
        label: <PaymentMethodLabel
            title={getData('title')}
            paymentMethod={getData('name')}
            icons={getData('icon')}/>,
        ariaLabel: 'BLIK',
        placeOrderButtonLabel: getData('placeOrderButtonLabel'),
        canMakePayment: canMakePayment(getData),
        content: <PaymentMethod content={LocalPaymentIntentContent} getData={getData} shouldCreatePaymentMethod={false}/>,
        edit: <PaymentMethod content={LocalPaymentIntentContent} getData={getData}/>,
        supports: {
            showSavedCards: false,
            showSaveOption: false,
            features: getData('features')
        }
    })
}