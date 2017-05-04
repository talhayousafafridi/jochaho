<?php
print_r($_POST);
print_r($_REQUEST);
?>
<form action="https://payments.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform" method="post">


<table style="border: 1px solid #000;
            padding-top: 20px; padding-bottom: 20px; padding-left: 20px;" width="500" cellspacing="0" cellpadding="2" border="0" align="center">
            <tbody><tr>
                <td>
                    pp_Version
                </td>
                <td>
                    <input name="pp_Version" id="Version" value="1.1" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_TxnType
                </td>
                <td>
                    <input name="pp_TransactionTypeCode" id="TransactionTypeCode" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_MerchantID
                </td>
                <td>
                    <input name="pp_MerchantCode" id="MerchantCode" value="00136810" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_Language
                </td>
                <td>
                    <input name="pp_Language" id="Language" value="EN" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_SubMerchantID
                </td>
                <td>
                    <input name="pp_SubMerchantCode" id="SubMerchantCode" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_Password
                </td>
                <td>
                    <input name="pp_Password" id="Password" value="082bz7au18" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    Pp_BankID
                </td>
                <td>
                    <input name="pp_BankCode" id="BankCode" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_ProductCode
                </td>
                <td>
                    <input name="pp_ProductCode" id="Text1" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_TxnRefNo
                </td>
                <td>
                    <input name="pp_TransactionReference" id="TransactionReference" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_Amount
                </td>
                <td>
                    <input name="pp_TransactionAmount" id="TransactionAmount" value="0" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_TxnCurrency
                </td>
                <td>
                    <input name="pp_CurrencyAlphaCode" id="CurrencyAlphaCode" value="PKR" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_TxnDateTime
                </td>
                <td>
                    <input name="pp_InputDateTime" id="InputDateTime" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_ExpiryDateTime
                </td>
                <td>
                    <input name="pp_TxnExpiry" id="TxnExpiry" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_BillReference
                </td>
                <td>
                    <input name="pp_BillReference" id="BillReference" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_Description
                </td>
                <td>
                    <input name="pp_Description" id="Description" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_ReturnURL
                </td>
                <td>
                    <input name="pp_ReturnURL" id="ReturnURL" value="http://192.168.14.8:81/jochaho_site/jazzcash.php" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmpf_1
                </td>
                <td>
                    <input name="pp_OptionalField1" id="OptionalField1" value="1" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmpf_2
                </td>
                <td>
                    <input name="pp_OptionalField2" id="OptionalField2" value="2" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmpf_3
                </td>
                <td>
                    <input name="pp_OptionalField3" id="OptionalField3" value="3" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmpf_4
                </td>
                <td>
                    <input name="pp_OptionalField4" id="OptionalField4" value="4" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmpf_5
                </td>
                <td>
                    <input name="pp_OptionalField5" id="OptionalField5" value="5" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmbf_1
                </td>
                <td>
                    <input name="pp_BankOptionalField1" id="BankOptionalField1" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmbf_2
                </td>
                <td>
                    <input name="pp_BankOptionalField2" id="BankOptionalField2" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmbf_3
                </td>
                <td>
                    <input name="pp_BankOptionalField3" id="BankOptionalField3" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmbf_4
                </td>
                <td>
                    <input name="pp_BankOptionalField4" id="BankOptionalField4" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    ppmbf_5
                </td>
                <td>
                    <input name="pp_BankOptionalField5" id="BankOptionalField5" value="" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    pp_SecureHash
                </td>
                <td>
                    <input name="pp_SecureHash" id="SecureHash" value="" type="text">
                </td>
            </tr>
        </tbody></table>
        
        
        

<input type="submit" value="SUBMIT PAYMENT" />
</form>