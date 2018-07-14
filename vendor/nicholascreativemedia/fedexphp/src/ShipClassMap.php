<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class ShipClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AdditionalLabelsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AdditionalLabelsDetail',
            'Address' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Address',
            'AdrLicenseDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AdrLicenseDetail',
            'AlcoholDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AlcoholDetail',
            'AncillaryFeeAndTax' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AncillaryFeeAndTax',
            'AssociatedShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AssociatedShipmentDetail',
            'BinaryBarcode' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\BinaryBarcode',
            'BrokerDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\BrokerDetail',
            'CertificateOfOriginDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CertificateOfOriginDetail',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'CodAddTransportationChargesDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CodAddTransportationChargesDetail',
            'CodDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CodDetail',
            'CodReturnPackageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CodReturnPackageDetail',
            'CommercialInvoice' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CommercialInvoice',
            'CommercialInvoiceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CommercialInvoiceDetail',
            'Commodity' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Commodity',
            'CompletedCodDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedCodDetail',
            'CompletedEtdDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedEtdDetail',
            'CompletedHazardousPackageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedHazardousPackageDetail',
            'CompletedHazardousShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedHazardousShipmentDetail',
            'CompletedHazardousSummaryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedHazardousSummaryDetail',
            'CompletedHoldAtLocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedHoldAtLocationDetail',
            'CompletedPackageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedPackageDetail',
            'CompletedShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedShipmentDetail',
            'CompletedSmartPostDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedSmartPostDetail',
            'CompletedTagDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedTagDetail',
            'ConfigurableLabelReferenceEntry' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ConfigurableLabelReferenceEntry',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ContactAndAddress',
            'ContentRecord' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ContentRecord',
            'CurrencyExchangeRate' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CurrencyExchangeRate',
            'CustomDeliveryWindowDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomDeliveryWindowDetail',
            'CustomDocumentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomDocumentDetail',
            'CustomLabelBarcodeEntry' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomLabelBarcodeEntry',
            'CustomLabelBoxEntry' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomLabelBoxEntry',
            'CustomLabelDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomLabelDetail',
            'CustomLabelGraphicEntry' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomLabelGraphicEntry',
            'CustomLabelPosition' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomLabelPosition',
            'CustomLabelTextBoxEntry' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomLabelTextBoxEntry',
            'CustomLabelTextEntry' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomLabelTextEntry',
            'CustomerImageUsage' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomerImageUsage',
            'CustomerReference' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomerReference',
            'CustomerSpecifiedLabelDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomerSpecifiedLabelDetail',
            'CustomsClearanceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomsClearanceDetail',
            'CustomsDeclarationStatementDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomsDeclarationStatementDetail',
            'CustomsOptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomsOptionDetail',
            'DangerousGoodsContainer' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsContainer',
            'DangerousGoodsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsDetail',
            'DangerousGoodsShippersDeclarationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsShippersDeclarationDetail',
            'DangerousGoodsSignatory' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DangerousGoodsSignatory',
            'DateRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DateRange',
            'DeleteShipmentRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeleteShipmentRequest',
            'DeleteTagRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeleteTagRequest',
            'DeliveryOnInvoiceAcceptanceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeliveryOnInvoiceAcceptanceDetail',
            'DestinationControlDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DestinationControlDetail',
            'Dimensions' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Dimensions',
            'DocTabContent' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocTabContent',
            'DocTabContentBarcoded' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocTabContentBarcoded',
            'DocTabContentZone001' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocTabContentZone001',
            'DocTabZoneSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocTabZoneSpecification',
            'DocumentFormatOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DocumentFormatOptionsRequested',
            'EMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EMailDetail',
            'EMailLabelDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EMailLabelDetail',
            'EMailRecipient' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EMailRecipient',
            'EdtCommodityTax' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EdtCommodityTax',
            'EdtExciseCondition' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EdtExciseCondition',
            'EdtTaxDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EdtTaxDetail',
            'EmailOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EmailOptionsRequested',
            'EtdDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EtdDetail',
            'ExportDeclarationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ExportDeclarationDetail',
            'ExportDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ExportDetail',
            'ExpressFreightDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ExpressFreightDetail',
            'FreightAddressLabelDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightAddressLabelDetail',
            'FreightBaseCharge' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightBaseCharge',
            'FreightGuaranteeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightGuaranteeDetail',
            'FreightRateDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightRateDetail',
            'FreightRateNotation' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightRateNotation',
            'FreightShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightShipmentDetail',
            'FreightShipmentLineItem' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightShipmentLineItem',
            'FreightSpecialServicePayment' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightSpecialServicePayment',
            'GeneralAgencyAgreementDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\GeneralAgencyAgreementDetail',
            'HazardousCommodityContent' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousCommodityContent',
            'HazardousCommodityDescription' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousCommodityDescription',
            'HazardousCommodityInnerReceptacleDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousCommodityInnerReceptacleDetail',
            'HazardousCommodityOptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousCommodityOptionDetail',
            'HazardousCommodityPackagingDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousCommodityPackagingDetail',
            'HazardousCommodityPackingDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousCommodityPackingDetail',
            'HazardousCommodityQuantityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HazardousCommodityQuantityDetail',
            'HoldAtLocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HoldAtLocationDetail',
            'HomeDeliveryPremiumDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HomeDeliveryPremiumDetail',
            'InternationalControlledExportDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\InternationalControlledExportDetail',
            'InternationalTrafficInArmsRegulationsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\InternationalTrafficInArmsRegulationsDetail',
            'LabelSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LabelSpecification',
            'LiabilityCoverageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LiabilityCoverageDetail',
            'LicenseOrPermitDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LicenseOrPermitDetail',
            'LinearMeasure' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LinearMeasure',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'Measure' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Measure',
            'Money' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Money',
            'NaftaCertificateOfOriginDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NaftaCertificateOfOriginDetail',
            'NaftaCommodityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NaftaCommodityDetail',
            'NaftaLowValueStatementDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NaftaLowValueStatementDetail',
            'NaftaProducer' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NaftaProducer',
            'NetExplosiveDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NetExplosiveDetail',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationDetail',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'Op900Detail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Op900Detail',
            'OperationalInstruction' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\OperationalInstruction',
            'PackageBarcodes' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PackageBarcodes',
            'PackageOperationalDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PackageOperationalDetail',
            'PackageRateDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PackageRateDetail',
            'PackageRating' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PackageRating',
            'PackageSpecialServicesRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PackageSpecialServicesRequested',
            'Party' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Party',
            'Payment' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Payment',
            'Payor' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Payor',
            'PendingShipmentAccessDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PendingShipmentAccessDetail',
            'PendingShipmentAccessorDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PendingShipmentAccessorDetail',
            'PendingShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PendingShipmentDetail',
            'PendingShipmentProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PendingShipmentProcessingOptionsRequested',
            'PickupDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PickupDetail',
            'PrintedReference' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PrintedReference',
            'PriorityAlertDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PriorityAlertDetail',
            'ProcessShipmentReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ProcessShipmentReply',
            'ProcessShipmentRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ProcessShipmentRequest',
            'ProcessTagReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ProcessTagReply',
            'ProcessTagRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ProcessTagRequest',
            'RadioactivityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RadioactivityDetail',
            'RadionuclideActivity' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RadionuclideActivity',
            'RadionuclideDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RadionuclideDetail',
            'RateDiscount' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RateDiscount',
            'Rebate' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Rebate',
            'RecipientCustomsId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RecipientCustomsId',
            'RecommendedDocumentSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RecommendedDocumentSpecification',
            'RegulatoryLabelContentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RegulatoryLabelContentDetail',
            'RequestedPackageLineItem' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RequestedPackageLineItem',
            'RequestedShipment' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RequestedShipment',
            'ReturnAssociationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReturnAssociationDetail',
            'ReturnEMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReturnEMailDetail',
            'ReturnInstructionsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReturnInstructionsDetail',
            'ReturnShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReturnShipmentDetail',
            'Rma' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Rma',
            'ShipmentAuthorizationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentAuthorizationDetail',
            'ShipmentConfigurationData' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentConfigurationData',
            'ShipmentDryIceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentDryIceDetail',
            'ShipmentDryIceProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentDryIceProcessingOptionsRequested',
            'ShipmentEventNotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentEventNotificationSpecification',
            'ShipmentLegRateDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentLegRateDetail',
            'ShipmentManifestDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentManifestDetail',
            'ShipmentNotificationFormatSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentNotificationFormatSpecification',
            'ShipmentOperationalDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentOperationalDetail',
            'ShipmentRateDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentRateDetail',
            'ShipmentRating' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentRating',
            'ShipmentReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentReply',
            'ShipmentSpecialServicesRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentSpecialServicesRequested',
            'ShippingDocument' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocument',
            'ShippingDocumentDispositionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentDispositionDetail',
            'ShippingDocumentEMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentEMailDetail',
            'ShippingDocumentEMailRecipient' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentEMailRecipient',
            'ShippingDocumentFormat' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentFormat',
            'ShippingDocumentPart' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentPart',
            'ShippingDocumentPrintDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentPrintDetail',
            'ShippingDocumentSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingDocumentSpecification',
            'SignatureOptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SignatureOptionDetail',
            'SmartPostShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SmartPostShipmentDetail',
            'SmartPostShipmentProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SmartPostShipmentProcessingOptionsRequested',
            'StringBarcode' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\StringBarcode',
            'Surcharge' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Surcharge',
            'Tax' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Tax',
            'TaxpayerIdentification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TaxpayerIdentification',
            'TrackingId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingId',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDocumentReferenceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentReferenceDetail',
            'ValidateShipmentRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidateShipmentRequest',
            'ValidatedHazardousCommodityContent' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidatedHazardousCommodityContent',
            'ValidatedHazardousCommodityDescription' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidatedHazardousCommodityDescription',
            'ValidatedHazardousContainer' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidatedHazardousContainer',
            'VariableHandlingChargeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VariableHandlingChargeDetail',
            'VariableHandlingCharges' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VariableHandlingCharges',
            'Volume' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Volume',
            'Weight' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}