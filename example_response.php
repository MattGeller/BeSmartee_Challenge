<?php
$resp = <<<XML
<?xml version="1.0"?>

<RESPONSE_GROUP MISMOVersionID="2.3.1">

    <RESPONDING_PARTY _Name="CREDIT PLUS" _StreetAddress="31550 WINTERPLACE PKWY" _City="SALISBURY" _State="MD" _PostalCode="21804">

        <CONTACT_DETAIL>

            <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8002583488"/>

            <CONTACT_POINT _RoleType="Work" _Type="Fax" _Value="8002583287"/>

        </CONTACT_DETAIL>

    </RESPONDING_PARTY>

    <RESPOND_TO_PARTY _Name="CREDIT PLUS of SALISBURY" _StreetAddress="31550 WINTERPLACE PKWY" _City="SALISBURY" _State="MD" _PostalCode="21804"/>

    <RESPONSE ResponseDateTime="2017-02-16T09:22:01-08">

        <KEY _Name="ExperianFairIsaac_MinimumValue" _Value="360"/>

        <KEY _Name="ExperianFairIsaac_MaximumValue" _Value="840"/>

        <RESPONSE_DATA>

            <CREDIT_RESPONSE MISMOVersionID="2.3.1" CreditResponseID="CreditResponse1" CreditReportIdentifier="37574529" CreditReportFirstIssuedDate="2017-02-16" CreditReportLastUpdatedDate="2017-02-16" CreditReportMergeType="Blend" CreditReportType="Merge" CreditRatingCodeType="Experian">

                <_DATA_INFORMATION>

                    <DATA_VERSION _Name="MORTGAGECREDITLINK" _Number=""/>

                    <DATA_VERSION _Name="MCLMismoFramework" _Number="2.1"/>

                </_DATA_INFORMATION>

                <CREDIT_BUREAU _Name="CREDIT PLUS" _StreetAddress="31550 WINTERPLACE PKWY" _City="SALISBURY" _State="MD" _PostalCode="21804">

                    <CONTACT_DETAIL>

                        <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8002583488"/>

                        <CONTACT_POINT _RoleType="Work" _Type="Fax" _Value="8002583287"/>

                    </CONTACT_DETAIL>

                </CREDIT_BUREAU>

                <CREDIT_REPOSITORY_INCLUDED _EquifaxIndicator="Y" _ExperianIndicator="Y" _TransUnionIndicator="Y"/>

                <REQUESTING_PARTY InternalAccountIdentifier="99999" _Name="CREDIT PLUS of SALISBURY" _StreetAddress="31550 WINTERPLACE PKWY" _City="SALISBURY" _State="MD" _PostalCode="21804"/>

                <CREDIT_REQUEST_DATA CreditRequestID="CreditRequest1" BorrowerID="Borrower" CreditRequestType="Individual" CreditReportRequestActionType="Reissue" CreditReportIdentifier="37574529">

                    <CREDIT_REPOSITORY_INCLUDED _EquifaxIndicator="Y" _ExperianIndicator="Y" _TransUnionIndicator="Y"/>

                </CREDIT_REQUEST_DATA>

                <CREDIT_ERROR_MESSAGE _SourceType="TransUnion">

                    <_Text>*** NO RECORD FOUND ***</_Text>

                </CREDIT_ERROR_MESSAGE>

                <CREDIT_ERROR_MESSAGE _SourceType="Equifax">

                    <_Text>*** NO RECORD FOUND ***</_Text>

                </CREDIT_ERROR_MESSAGE>

                <BORROWER BorrowerID="Borrower" _BirthDate="1999-01-01" _FirstName="TIM" _LastName="TESTCASE" _PrintPositionType="Borrower" _SSN="123456789" _UnparsedName="TIM TESTCASE" MaritalStatusType="Unknown">

                    <_RESIDENCE _City="HUNTINGTON BEACH" _State="CA" _PostalCode="92649" _StreetAddress="4053 ALADDIN DR" BorrowerResidencyType="Current"/>

                </BORROWER>

                <CREDIT_LIABILITY CreditLiabilityID="CreditLiability19" BorrowerID="Borrower" CreditFileID="CreditFile1" _AccountIdentifier="411049******" _AccountOpenedDate="1999-03" _AccountOwnershipType="Individual" _AccountReportedDate="2004-11" _AccountType="Revolving" _HighCreditAmount="8000" _LastActivityDate="2004-11" _MonthlyPaymentAmount="145" _MonthsReviewedCount="25" _TermsMonthsCount="" _UnpaidBalanceAmount="7483" CreditLoanType="CreditCard" _AccountStatusType="Open" _ConsumerDisputeIndicator="Y" _CreditLimitAmount="8000" _ManualUpdateIndicator="N" _PastDueAmount="0" _TermsSourceType="Provided" CreditBusinessType="Banking">

                    <_CREDITOR _Name="1ST OMNI CARD"/>

                    <_CURRENT_RATING _Code="C" _Type="AsAgreed"/>

                    <_HIGHEST_ADVERSE_RATING _Code="-" _Type="NoDataAvailable"/>

                    <_LATE_COUNT _30Days="0" _60Days="0" _90Days="0"/>

                    <_PAYMENT_PATTERN _Data="CCCCCCCCCCCCCCCCCCCCCCCC" _StartDate="2004-10"/>

                    <CREDIT_COMMENT _SourceType="CreditBureau" _Type="BureauRemarks">

                        <_Text>ACCOUNT DISPUTED BY CONSUMER AND DENIED BY CREDITOR</_Text>

                    </CREDIT_COMMENT>

                    <CREDIT_REPOSITORY _SourceType="Experian" _SubscriberCode="1135353"/>

                </CREDIT_LIABILITY>

                <CREDIT_LIABILITY CreditLiabilityID="CreditLiability17" BorrowerID="Borrower" CreditFileID="CreditFile1" CreditTradeReferenceID="CreditTradeReference33" _AccountIdentifier="501265******" _AccountOpenedDate="1998-02" _AccountOwnershipType="JointContractualLiability" _AccountReportedDate="2004-11" _AccountType="Revolving" _HighCreditAmount="5000" _LastActivityDate="2004-11" _MonthlyPaymentAmount="49" _MonthsReviewedCount="69" _TermsMonthsCount="010" _UnpaidBalanceAmount="1892" CreditLoanType="CreditCard" _AccountStatusType="Open" _ConsumerDisputeIndicator="Y" _CreditLimitAmount="5000" _ManualUpdateIndicator="N" _PastDueAmount="0" _TermsDescription="010 months at $49 per month" _TermsSourceType="Provided" CreditBusinessType="Banking">

                    <_CREDITOR _Name="BANK ONE" _StreetAddress="148 COLLEGE STREET" _City="BURLINGTON" _State="VT" _PostalCode="05402">

                        <CONTACT_DETAIL>

                            <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8026581816"/>

                        </CONTACT_DETAIL>

                    </_CREDITOR>

                    <_CURRENT_RATING _Code="C" _Type="AsAgreed"/>

                    <_HIGHEST_ADVERSE_RATING _Code="-" _Type="NoDataAvailable"/>

                    <_LATE_COUNT _30Days="0" _60Days="0" _90Days="0"/>

                    <_PAYMENT_PATTERN _Data="CCXXCXXXXXXCXXXXXXXXXXXXXXXX" _StartDate="2004-10"/>

                    <CREDIT_COMMENT _SourceType="CreditBureau" _Type="BureauRemarks">

                        <_Text>ACCOUNT DISPUTED BY CONSUMER AND DENIED BY CREDITOR</_Text>

                    </CREDIT_COMMENT>

                    <CREDIT_REPOSITORY _SourceType="Experian" _SubscriberCode="1124242"/>

                </CREDIT_LIABILITY>

                <CREDIT_LIABILITY CreditLiabilityID="CreditLiability21" BorrowerID="Borrower" CreditFileID="CreditFile1" CreditTradeReferenceID="CreditTradeReference35" _AccountIdentifier="45211968" _AccountOpenedDate="2004-05" _AccountOwnershipType="Individual" _AccountReportedDate="2004-05" _AccountType="Unknown" _HighCreditAmount="172" _LastActivityDate="2004-11" _MonthlyPaymentAmount="" _MonthsReviewedCount="0" _TermsMonthsCount="" _UnpaidBalanceAmount="172" CreditLoanType="UnknownLoanType" _AccountClosedDate="2004-11" _AccountStatusType="Closed" _ManualUpdateIndicator="N" CreditBusinessType="CollectionServices">

                    <_CREDITOR _Name="E-Z COLLECTIONS" _StreetAddress="7716 BALBOA BLVD STE C" _City="VAN NUYS" _State="CA" _PostalCode="91406">

                        <CONTACT_DETAIL>

                            <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8189081855"/>

                        </CONTACT_DETAIL>

                    </_CREDITOR>

                    <_CURRENT_RATING _Code="9" _Type="CollectionOrChargeOff"/>

                    <_HIGHEST_ADVERSE_RATING _Code="-" _Type="NoDataAvailable"/>

                    <_LATE_COUNT _30Days="0" _60Days="0" _90Days="0"/>

                    <CREDIT_COMMENT _SourceType="CreditBureau" _Type="BureauRemarks">

                        <_Text>ORIGINAL CREDITOR: ABC CELLULAR</_Text>

                    </CREDIT_COMMENT>

                    <CREDIT_REPOSITORY _SourceType="Experian" _SubscriberCode="3980111"/>

                </CREDIT_LIABILITY>

                <CREDIT_INQUIRY CreditInquiryID="CreditInquiry23" BorrowerID="Borrower" CreditFileID="CreditFile1" CreditTradeReferenceID="CreditTradeReference35" _Name="E-Z COLLECTIONS" _Date="2004-04-24" CreditBusinessType="CollectionServices">

                    <CREDIT_REPOSITORY _SourceType="Experian" _SubscriberCode="3980111"/>

                </CREDIT_INQUIRY>

                <CREDIT_INQUIRY CreditInquiryID="CreditInquiry25" BorrowerID="Borrower" CreditFileID="CreditFile1" _Name="WORLDWIDE MTG" _Date="2004-10-02" CreditBusinessType="Finance">

                    <CREDIT_REPOSITORY _SourceType="Experian" _SubscriberCode="3587878"/>

                </CREDIT_INQUIRY>

                <CREDIT_FILE CreditFileID="CreditFile1" BorrowerID="Borrower" _ResultStatusType="FileReturned" CreditRepositorySourceType="Experian">

                    <_ALERT_MESSAGE _AdverseIndicator="Y" _CategoryType="FACTAFraudVictimExtended">

                        <_Text>FACTA: Fraud Victim Extended - Consumer is a victim of fraudulent activity.  VERIFY IDENTITY OF CONSUMER BEFORE GRANTING CREDIT.</_Text>

                    </_ALERT_MESSAGE>

                    <_BORROWER _FirstName="TIM" _LastName="TESTCASE" _SSN="299887766" _UnparsedName="TIM TESTCASE">

                        <_RESIDENCE _StreetAddress="328 ANAHEIM BLVD/ORANGE CA 92868">

                            <PARSED_STREET_ADDRESS _HouseNumber="328 ANAHEIM BLVD/ORANGE CA 92868"/>

                        </_RESIDENCE>

                        <_RESIDENCE _StreetAddress="4311 LEWIS #D25/IRVINE CA 92714">

                            <PARSED_STREET_ADDRESS _HouseNumber="4311 LEWIS #D25/IRVINE CA 92714"/>

                        </_RESIDENCE>

                        <EMPLOYER _Name="FLUOR ELECTRONICS" _StreetAddress="5362 MESA DR" _City="SANTA ANA" _State="CA" CurrentEmploymentStartDate="2002-10"/>

                    </_BORROWER>

                    <_VARIATION _Type="DifferentSSN"/>

                    <CREDIT_COMMENT _SourceType="Experian" _Type="ConsumerStatement">

                        <_Text>04-15-96  "MY IDENTIFICATION HAS BEEN USED, WITHOUT MY CONSENT, ON APPLICATIONS TO OBTAIN CREDIT. VERBAL CONFIRMATION FROM ME AT (714)555-1234 (HOME) OR (714)555-1232 (WORK) IS REQUESTED PRIOR TO CREDIT APPROVAL</_Text>

                    </CREDIT_COMMENT>

                </CREDIT_FILE>

                <CREDIT_FILE CreditFileID="CreditFile2" BorrowerID="Borrower" _ResultStatusType="NoFileReturnedError" CreditRepositorySourceType="TransUnion" _InfileDate="2017-02-16">

                    <_ALERT_MESSAGE _Type="TransUnionHAWKAlert">

                        <_Text>AVAILABLE AND CLEAR</_Text>

                    </_ALERT_MESSAGE>

                    <_ALERT_MESSAGE _Type="Other" _TypeOtherDescription="Repository remark">

                        <_Text>TRANSUNION ADD-ON: PRODUCT CODE 07011 [GEO CODE] NOT RETURNED BECAUSE THE REQUESTED INFORMATION CANNOT BE SCORED OR RETURNED BECAUSE DATA IS SUPPRESSED OR CANNOT BE EVALUATED</_Text>

                    </_ALERT_MESSAGE>

                    <_ALERT_MESSAGE _Type="Other" _TypeOtherDescription="Repository remark">

                        <_Text>TRANSUNION ADD-ON: PRODUCT CODE 07640 [INQUIRY ANALYSIS] NOT RETURNED BECAUSE THE REQUESTED INFORMATION CANNOT BE SCORED OR RETURNED BECAUSE DATA IS SUPPRESSED OR CANNOT BE EVALUATED</_Text>

                    </_ALERT_MESSAGE>

                    <_ALERT_MESSAGE _Type="Other" _TypeOtherDescription="Repository remark">

                        <_Text>TRANSUNION ADD-ON: PRODUCT CODE 07013 [ARM ALERT] NOT RETURNED BECAUSE THE REQUESTED INFORMATION CANNOT BE SCORED OR RETURNED BECAUSE DATA IS SUPPRESSED OR CANNOT BE EVALUATED</_Text>

                    </_ALERT_MESSAGE>

                    <_BORROWER _FirstName="TIM" _LastName="TESTCASE" _UnparsedName="TIM TESTCASE"/>

                    <CREDIT_ERROR_MESSAGE _SourceType="TransUnion">

                        <_Text>*** NO RECORD FOUND ***</_Text>

                    </CREDIT_ERROR_MESSAGE>

                </CREDIT_FILE>

                <CREDIT_FILE CreditFileID="CreditFile3" BorrowerID="Borrower" _ResultStatusType="NoFileReturnedError" CreditRepositorySourceType="Equifax" _InfileDate="">

                    <_ALERT_MESSAGE _AdverseIndicator="Y" _CategoryType="SSNVerification" _Type="EquifaxSAFESCAN">

                        <_Text>INQUIRY SSN IS INVALID</_Text>

                    </_ALERT_MESSAGE>

                    <_ALERT_MESSAGE _AdverseIndicator="N" _Type="EquifaxSAFESCAN">

                        <_Text>UNABLE TO PERFORM TELEPHONE VALIDATION DUE TO INSUFFICIENT TELEPHONE INPUT</_Text>

                    </_ALERT_MESSAGE>

                    <CREDIT_ERROR_MESSAGE _SourceType="Equifax">

                        <_Text>*** NO RECORD FOUND ***</_Text>

                    </CREDIT_ERROR_MESSAGE>

                </CREDIT_FILE>

                <CREDIT_SCORE CreditScoreID="CreditScore9" BorrowerID="Borrower" CreditFileID="CreditFile1" CreditReportIdentifier="37574529" CreditRepositorySourceType="Experian" _Date="2004-11-18" _FACTAInquiriesIndicator="N" _ModelNameType="ExperianFairIsaac" _Value="345">

                    <_FACTOR _Code="02" _Text="LEVEL OF DELINQUENCY ON ACCOUNTS"/>

                    <_FACTOR _Code="20" _Text="TIME SINCE DEROGATORY PUBLIC RECORD OR COLLECTION IS TOO SHORT"/>

                    <_FACTOR _Code="18" _Text="NUMBER OF ACCOUNTS WITH DELINQUENCY"/>

                    <_FACTOR _Code="10" _Text="PROPORTION OF BALANCE TO HIGH CREDIT ON BANK REVOLVING OR ALL REVOLVING ACCOUNTS"/>

                </CREDIT_SCORE>

                <CREDIT_TRADE_REFERENCE CreditTradeReferenceID="CreditTradeReference33" _Name="BANK OF VERMONT" _StreetAddress="148 COLLEGE STREET" _City="BURLINGTON" _State="VT" _PostalCode="05402">

                    <CONTACT_DETAIL>

                        <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8026581816"/>

                    </CONTACT_DETAIL>

                    <CREDIT_REPOSITORY _SourceType="Experian" _SubscriberCode="1124242"/>

                </CREDIT_TRADE_REFERENCE>

                <CREDIT_TRADE_REFERENCE CreditTradeReferenceID="CreditTradeReference35" _Name="TRACO" _StreetAddress="7716 BALBOA BLVD STE C" _City="VAN NUYS" _State="CA" _PostalCode="91406">

                    <CONTACT_DETAIL>

                        <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8189081855"/>

                    </CONTACT_DETAIL>

                    <CREDIT_REPOSITORY _SourceType="Experian" _SubscriberCode="3980111"/>

                </CREDIT_TRADE_REFERENCE>

                <CREDIT_CONSUMER_REFERRAL _Name="EQUIFAX" _StreetAddress="PO BOX 740241" _City="ATLANTA" _State="GA" _PostalCode="30374">

                    <CONTACT_DETAIL>

                        <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8006851111"/>

                    </CONTACT_DETAIL>

                </CREDIT_CONSUMER_REFERRAL>

                <CREDIT_CONSUMER_REFERRAL _Name="EXPERIAN" _StreetAddress="PO BOX 4500" _City="ALLEN" _State="TX" _PostalCode="75013">

                    <CONTACT_DETAIL>

                        <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8883973742"/>

                    </CONTACT_DETAIL>

                </CREDIT_CONSUMER_REFERRAL>

                <CREDIT_CONSUMER_REFERRAL _Name="TRANSUNION" _StreetAddress="PO BOX 2000" _City="CHESTER" _State="PA" _PostalCode="19016">

                    <CONTACT_DETAIL>

                        <CONTACT_POINT _RoleType="Work" _Type="Phone" _Value="8008884213"/>

                    </CONTACT_DETAIL>

                </CREDIT_CONSUMER_REFERRAL>

                <CREDIT_SUMMARY BorrowerID="Borrower" _Name="MLTradeSummary">

                    <_DATA_SET _Name="LiabilityOldestDate" _Value="1998-02"/>

                    <_DATA_SET _Name="LiabilityOldestCreditorName" _Value="BANK ONE"/>

                    <_DATA_SET _Name="MortgageCount" _Value="0"/>

                    <_DATA_SET _Name="MortgageBalance" _Value="0"/>

                    <_DATA_SET _Name="MortgagePayment" _Value="0"/>

                    <_DATA_SET _Name="MortgagePastDue" _Value="0"/>

                    <_DATA_SET _Name="MortgageHighCredit" _Value="0"/>

                    <_DATA_SET _Name="InstallmentCount" _Value="0"/>

                    <_DATA_SET _Name="InstallmentBalance" _Value="0"/>

                    <_DATA_SET _Name="InstallmentPayment" _Value="0"/>

                    <_DATA_SET _Name="InstallmentPastDue" _Value="0"/>

                    <_DATA_SET _Name="InstallmentHighCredit" _Value="0"/>

                    <_DATA_SET _Name="InstallmentOtherCount" _Value="0"/>

                    <_DATA_SET _Name="InstallmentOtherBalance" _Value="0"/>

                    <_DATA_SET _Name="InstallmentOtherPayment" _Value="0"/>

                    <_DATA_SET _Name="InstallmentOtherPastDue" _Value="0"/>

                    <_DATA_SET _Name="InstallmentOtherHighCredit" _Value="0"/>

                    <_DATA_SET _Name="AutoCount" _Value="0"/>

                    <_DATA_SET _Name="AutoBalance" _Value="0"/>

                    <_DATA_SET _Name="AutoPayment" _Value="0"/>

                    <_DATA_SET _Name="AutoPastDue" _Value="0"/>

                    <_DATA_SET _Name="AutoHighCredit" _Value="0"/>

                    <_DATA_SET _Name="EducationCount" _Value="0"/>

                    <_DATA_SET _Name="EducationBalance" _Value="0"/>

                    <_DATA_SET _Name="EducationPayment" _Value="0"/>

                    <_DATA_SET _Name="EducationPastDue" _Value="0"/>

                    <_DATA_SET _Name="EducationHighCredit" _Value="0"/>

                    <_DATA_SET _Name="OpenCount" _Value="0"/>

                    <_DATA_SET _Name="OpenBalance" _Value="0"/>

                    <_DATA_SET _Name="OpenPayment" _Value="0"/>

                    <_DATA_SET _Name="OpenPastDue" _Value="0"/>

                    <_DATA_SET _Name="OpenHighCredit" _Value="0"/>

                    <_DATA_SET _Name="RevolvingCount" _Value="2"/>

                    <_DATA_SET _Name="RevolvingBalance" _Value="9375"/>

                    <_DATA_SET _Name="RevolvingPayment" _Value="194"/>

                    <_DATA_SET _Name="RevolvingPastDue" _Value="0"/>

                    <_DATA_SET _Name="RevolvingHighCredit" _Value="13000"/>

                    <_DATA_SET _Name="UnknownCount" _Value="1"/>

                    <_DATA_SET _Name="UnknownBalance" _Value="172"/>

                    <_DATA_SET _Name="UnknownPayment" _Value="0"/>

                    <_DATA_SET _Name="UnknownPastDue" _Value="0"/>

                    <_DATA_SET _Name="UnknownHighCredit" _Value="172"/>

                    <_DATA_SET _Name="TotalLiabilityCount" _Value="3"/>

                    <_DATA_SET _Name="TotalLiabilityBalance" _Value="9547"/>

                    <_DATA_SET _Name="TotalLiabilityPayment" _Value="194"/>

                    <_DATA_SET _Name="TotalLiabilityPastDue" _Value="0"/>

                    <_DATA_SET _Name="TotalLiabilityHighCredit" _Value="13172"/>

                </CREDIT_SUMMARY>

                <CREDIT_SUMMARY BorrowerID="Borrower" _Name="MLDerogatorySummary">

                    <_DATA_SET _Name="TotalSecuredLoanBalance" _Value="0"/>

                    <_DATA_SET _Name="TotalUnsecuredLoanBalance" _Value="9547"/>

                    <_DATA_SET _Name="TotalHighCredit" _Value="13000"/>

                    <_DATA_SET _Name="DebtHighCredit" _Value="73%"/>

                    <_DATA_SET _Name="Day30" _Value="0"/>

                    <_DATA_SET _Name="Day60" _Value="0"/>

                    <_DATA_SET _Name="Day90" _Value="0"/>

                    <_DATA_SET _Name="DerogOtherCount" _Value="0"/>

                    <_DATA_SET _Name="LiabilitySatisfactoryCount" _Value="2"/>

                    <_DATA_SET _Name="LiabilityBankruptcyCount" _Value="0"/>

                    <_DATA_SET _Name="LiabilityCollectionCount" _Value="1"/>

                    <_DATA_SET _Name="LiabilityChargeOffCount" _Value="0"/>

                    <_DATA_SET _Name="LiabilityCurrentAdverseCount" _Value="0"/>

                    <_DATA_SET _Name="LiabilityPreviousAdverseCount" _Value="0"/>

                    <_DATA_SET _Name="InquiryCount" _Value="2"/>

                    <_DATA_SET _Name="PublicRecordCount" _Value="0"/>

                    <_DATA_SET _Name="DisputeCount" _Value="2"/>

                </CREDIT_SUMMARY>

                <REGULATORY_PRODUCT CreditFileID="CreditFile1" BorrowerID="Borrower" CreditRepositorySourceType="Experian" _SourceType="OFAC" _ResultText="TIM TESTCASE YOB: 1963 &#13;&#10;EXPERIAN OFAC NAME MATCHING SERVICE: NO MATCH FOUND UNLESS OTHERWISE INDICATED" _ResultStatusType="Clear"/>

                <REGULATORY_PRODUCT CreditFileID="CreditFile2" BorrowerID="Borrower" CreditRepositorySourceType="TransUnion" _SourceType="OFAC" _ResultText="TRANSUNION OFAC NAME SCREEN: CLEAR" _ResultStatusType="Clear"/>

                <REGULATORY_PRODUCT CreditFileID="CreditFile3" BorrowerID="Borrower" CreditRepositorySourceType="Equifax" _SourceType="OFAC" _ResultText="EQUIFAX OFAC ALERT: NOTHING TO REPORT&#13;&#10;NO MATCH FOUND IN CDC'S OFAC DATABASE." _ResultStatusType="Clear"/>

                <EMBEDDED_FILE _Extension="htm" _Type="HTML" MIMEType="text/html" _Name="37574529.htm">

                    <DOCUMENT>

                        <![CDATA[

						<!-- MCL_BEGIN_REPORT:CREDIT_ASSURE -->

						<html>

							<head>

								<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

								<title>CREDIT ASSURE</title>

								<style type="text/css">

				/*&lt;![CDATA[*/

				.RadarTable  { font-size: 9pt; font-family: Arial; border-width: 0px; align: center; margin-left: auto; margin-right: auto; width: 100%; }.RadarTable td { padding-top: 0px; padding-bottom: 0px; font-size: 8.5pt; }.dark  { color: #4d4e53; }

				/*]]&gt;*/

			</style>

								<script type="text/javascript">

									<!--

							function ExternalShowAssure(sBaseUrl, nOrderID, sConsumerCode, sBureau)

							{

									var sURL = sBaseUrl + "/shared/Analyzer/ShowAssureOrderPage.aspx?orderid=" + encodeURIComponent(nOrderID) + "&consumer=" + encodeURIComponent(sConsumerCode) + "&bureau=" + encodeURIComponent(sBureau) + "&redirect=T";

									openPopupNoFormPost(sURL);

							}

							-->

								</script>

							</head>

							<body class="reportbody">

								<span>

									<span>

										<table cellspacing="0" class="RadarTable" style="width:650px;background-color:white;">

											<colgroup>

												<col style="width:50%;"></col>

												<col style="width:50%;"></col>

											</colgroup>

											<tr style="font-family:arial;">

												<td rowspan="2" style="padding-left:0.18in;font-size:12.1pt;vertical-align:top;color:#4d4e53;">CREDIT PLUS</td>

												<td style="padding-left:0.27in;font-size:9.2pt;color:#4d4e53;padding-bottom:5px;">31550 WINTERPLACE PKWY | SALISBURY,

													<span style="white-space:nowrap;">MD

						21804</span>

												</td>

											</tr>

											<tr>

												<td style="padding-left:0.27in;font-size:9.2pt;color:#4d4e53;padding-bottom:5px;">(800) 258-3488</td>

											</tr>

										</table>

										<table cellspacing="0" cellpadding="0" class="RadarTable" style="width:643px;border-width:0;font-size:8.5pt;">

											<colgroup>

												<col style="width:19;"></col>

												<col style="width:330;"></col>

												<col style="width:110;"></col>

												<col style="width:165;"></col>

												<col style="width:19;"></col>

											</colgroup>

											<tr>

												<td colspan="4">

													<img alt="" src="https://credit.creditplus.com/shared/images/Header/h01.png" style="width:624px;height:12px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Header/h02.png" style="width:19px;height:12px;"></img>

												</td>

											</tr>

											<tr style="height:19px;">

												<td rowspan="4">

													<img alt="" src="https://credit.creditplus.com/shared/images/Header/h03.png" style="width:19px;height:73px;"></img>

												</td>

												<td rowspan="4" style="text-align:center;">

													<span style="font-size:9pt;">

						Prepared for:

					</span>

													<br />

													<span class="dark" style="font-size:12.5pt;">CREDIT PLUS of SALISBURY</span>

													<br />

													<span style="font-size:9pt;">31550 WINTERPLACE PKWY, SALISBURY,

							MD

							21804</span>

												</td>

												<td style="font-size:8.5pt;width:100px;">

					File #:

				</td>

												<td style="font-size:8.5pt;">37574529</td>

												<td rowspan="4">

													<img alt="" src="https://credit.creditplus.com/shared/images/Header/h04.png" style="width:19px;height:73px;"></img>

												</td>

											</tr>

											<tr>

												<td style="font-size:8.5pt;">

					Applicant:

				</td>

												<td style="font-size:8.5pt;">TIM TESTCASE</td>

											</tr>

											<tr>

												<td style="font-size:8.5pt;">

					Co-Applicant:

				</td>

												<td style="font-size:8.5pt;"></td>

											</tr>

											<tr>

												<td style="font-size:8.5pt;">

					Date Ordered:

				</td>

												<td style="font-size:8.5pt;">2/16/2017</td>

											</tr>

											<tr>

												<td colspan="4">

													<img alt="" src="https://credit.creditplus.com/shared/images/Header/h05.png" style="width:624px;height:13px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Header/h06.png" style="width:19px;height:13px;"></img>

												</td>

											</tr>

										</table>

										<table cellspacing="0" cellpadding="0" class="RadarTable" style="width:643px;border-width:0;">

											<colgroup>

												<col style="width:19;"></col>

												<col style="width:198;"></col>

												<col style="width:8;"></col>

												<col style="width:100;"></col>

												<col style="width:100;"></col>

												<col style="width:8;"></col>

												<col style="width:91;"></col>

												<col style="width:100;"></col>

												<col style="width:19;"></col>

											</colgroup>

											<tr>

												<td colspan="9">

													<img alt="Credit Radar" src="https://credit.creditplus.com/shared/images/Icons/Credit-Radar-Logo.png" style="width:244px;height:53px;"></img>

												</td>

											</tr>

											<tr>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA01.png" style="width:19px;height:18px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA02.png" style="height:18px;width:198px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA03.png" style="width:8px;height:18px;"></img>

												</td>

												<td colspan="2">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA04.png" style="height:18px;width:200px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA05.png" style="width:8px;height:18px;"></img>

												</td>

												<td colspan="2">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA06.png" style="height:18px;width:191px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA07.png" style="width:19px;height:18px;"></img>

												</td>

											</tr>

											<tr>

												<td rowspan="10">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA08.png" style="width:19px;height:215px;"></img>

												</td>

												<td>

													<span style="font-size:12pt;color:#0078c9;">Qualifications</span>

												</td>

												<td rowspan="10">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA09.png" style="width:8px;height:215px;"></img>

												</td>

												<td colspan="2" style="text-align:center;">

													<span style="font-size:12pt;color:#0078c9;">Applicant</span>

												</td>

												<td rowspan="10">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA10.png" style="width:8px;height:215px;"></img>

												</td>

												<td colspan="2" style="text-align:center;">

													<span class="dark">Co-applicant not ordered</span>

												</td>

												<td rowspan="10">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA11.png" style="width:19px;height:215px;"></img>

												</td>

											</tr>

											<tr>

												<td></td>

												<td style="text-align:center;color:#0078c9;vertical-align:top;">Current

													<br />

													<span class="dark" style="font-size:7.3pt;">(from bureaus*)</span>

												</td>

												<td style="text-align:center;color:#0078c9;vertical-align:top;">Potential</td>

												<td colspan="2"></td>

											</tr>

											<tr>

												<td>Credit score





													<span></span>

												</td>

												<td colspan="2"></td>

												<td colspan="2"></td>

											</tr>

											<tr>

												<td style="padding-left:0.25in;">on Equifax</td>

												<td style="font-size:11.3pt;text-align:center;vertical-align:middle;padding-right:0;color:#4d4e53;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Mid-Score-Blank.png" style="padding-left:0.035in;padding-right:0.035in;width:25px;height:20px;vertical-align:middle;"></img>none

												</td>

												<td class="dark" style="font-size:9pt;text-align:right;vertical-align:middle;white-space:nowrap;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Credit-Assure-Blank.png" style="padding-left:0.04in;padding-right:0.04in;width:34px;height:20px;"></img>

												</td>

												<td colspan="2"></td>

											</tr>

											<tr>

												<td style="padding-left:0.25in;">on Experian</td>

												<td style="font-size:11.3pt;text-align:center;vertical-align:middle;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Mid-Score-Blank.png" style="padding-left:0.035in;padding-right:0.035in;width:25px;height:20px;vertical-align:middle;"></img>345

												</td>

												<td class="dark" style="font-size:9pt;text-align:right;white-space:nowrap;">+45

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Credit-Assure-Arrow.png" style="width:12px;height:20px;vertical-align:middle;padding-right:0.01in;padding-left:0.01in;"></img>390

													<a href="javascript:ExternalShowAssure('https://credit.creditplus.com', '37574529', 'PC', 'XP');" style="text-decoration:none;">

														<img alt="More" src="https://credit.creditplus.com/shared/images/Icons/Credit-Assure-Button.png" style="border-width:0px;border-style:none;width:34px;height:19px;vertical-align:middle;padding-left:0.04in;padding-right:0.04in;"></img>

													</a>

												</td>

												<td colspan="2"></td>

											</tr>

											<tr>

												<td style="padding-left:0.25in;">on TransUnion</td>

												<td style="font-size:11.3pt;text-align:center;vertical-align:middle;padding-right:0;color:#4d4e53;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Mid-Score-Blank.png" style="padding-left:0.035in;padding-right:0.035in;width:25px;height:20px;vertical-align:middle;"></img>none

												</td>

												<td class="dark" style="font-size:9pt;text-align:right;white-space:nowrap;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Credit-Assure-Blank.png" style="padding-left:0.04in;padding-right:0.04in;width:34px;height:20px;"></img>

												</td>

												<td colspan="2"></td>

											</tr>

											<tr>

												<td>Negative mortgage history</td>

												<td colspan="2"></td>

												<td colspan="2"></td>

											</tr>

											<tr>

												<td style="padding-left:0.25in;">In last 12 months</td>

												<td colspan="2" style="color:#4d4e53;text-align:center;vertical-align:middle;font-size:8pt;">none</td>

												<td colspan="2" style="color:#4d4e53;text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td style="padding-left:0.25in;">All time</td>

												<td colspan="2" style="color:#4d4e53;text-align:center;vertical-align:middle;font-size:8pt;">none</td>

												<td colspan="2" style="color:#4d4e53;text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td>Installment loans â‰¤ 10 months left</td>

												<td colspan="2" style="color:#4d4e53;text-align:center;vertical-align:top;font-size:8pt;">none</td>

												<td colspan="2" style="color:#4d4e53;text-align:center;vertical-align:top;"></td>

											</tr>

											<tr style="height:9px;">

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA12.png" style="width:19px;height:9px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA13.png" style="height:9px;width:198px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA14.png" style="width:8px;height:9px;"></img>

												</td>

												<td colspan="2">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA15.png" style="height:9px;width:200px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA16.png" style="width:8px;height:9px;"></img>

												</td>

												<td colspan="2">

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA17.png" style="height:9px;width:191px;"></img>

												</td>

												<td>

													<img src="https://credit.creditplus.com/shared/images/Border_NA/NA18.png" style="width:19px;height:9px;"></img>

												</td>

											</tr>

											<tr>

												<td rowspan="9">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA19.png" style="width:19px;height:201px;"></img>

												</td>

												<td style="font-size:12pt;color:#0078c9;">Key Indicators</td>

												<td rowspan="9">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA20.png" style="width:8px;height:201px;"></img>

												</td>

												<td colspan="2"></td>

												<td rowspan="9">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA21.png" style="width:8px;height:201px;"></img>

												</td>

												<td colspan="2"></td>

												<td rowspan="9">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA22.png" style="width:19px;height:201px;"></img>

												</td>

											</tr>

											<tr>

												<td>Score forecast, in 30 days

													<img alt="help" src="https://credit.creditplus.com/shared/images/Icons/Help-Icon.png" title="This assumes on-time, monthly payments on all accounts. &#xA;Common reasons for decrease: &#xA;&gt;&gt; Recent inquiries begin impacting score after 30 days &#xA;&gt;&gt; Positive information becomes old enough to get removed &#xA;Common reasons for increase: &#xA;&gt;&gt; Longer history of paying on time &#xA;&gt;&gt; Negative information becomes less recent" style="width:19px;height:18px;padding-left:0.06in;"></img>

												</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;padding-right:0.15in;font-size:10pt;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Score-Increase-Arrow.png" style="width:12px;height:12px;padding-right:0.025in;"></img>349

												</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td>Collection accounts</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;color:#4d4e53;font-size:8pt;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Alert-Icon.png" style="width:19px;height:19px;"></img>

												</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td>Public records</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;color:#4d4e53;font-size:8pt;">none</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td>In dispute</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;color:#4d4e53;font-size:8pt;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Alert-Icon.png" style="width:19px;height:19px;"></img>

												</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td>In credit counseling</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;color:#4d4e53;font-size:8pt;">none</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td>Authorized user</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;color:#4d4e53;font-size:8pt;">none</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td>Mortgage shopping





													<span style="color:#4d4e53;">(recent inquiries)</span>

												</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;color:#4d4e53;font-size:8pt;">none</td>

												<td colspan="2" style="text-align:center;vertical-align:middle;"></td>

											</tr>

											<tr>

												<td style="vertical-align:top;">Alerts reported by bureaus

													<img alt="help" src="https://credit.creditplus.com/shared/images/Icons/Help-Icon.png" title="This indicates fraud, active duty military status, deceased, OFAC match, or the submitted SSN does not match the credit file." style="width:19px;height:18px;padding-left:0.06in;"></img>

												</td>

												<td colspan="2" style="text-align:center;vertical-align:top;color:#4d4e53;font-size:8pt;">

													<img alt="" src="https://credit.creditplus.com/shared/images/Icons/Alert-Icon.png" style="width:19px;height:19px;"></img>

												</td>

												<td colspan="2" style="text-align:center;vertical-align:top;"></td>

											</tr>

											<tr style="height:9px;">

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA23.png" style="width:19px;height:9px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA24.png" style="height:9px;width:198px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA25.png" style="width:8px;height:9px;"></img>

												</td>

												<td colspan="2">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA26.png" style="height:9px;width:200px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA27.png" style="width:8px;height:9px;"></img>

												</td>

												<td colspan="2">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA28.png" style="height:9px;width:191px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA29.png" style="width:19px;height:9px;"></img>

												</td>

											</tr>

											<tr>

												<td rowspan="3">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA30.png" style="width:19px;height:65px;"></img>

												</td>

												<td style="font-size:12pt;color:#0078c9;">Score Risk</td>

												<td rowspan="3">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA31.png" style="width:8px;height:65px;"></img>

												</td>

												<td colspan="2"></td>

												<td rowspan="3">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA32.png" style="width:8px;height:65px;"></img>

												</td>

												<td colspan="2"></td>

												<td rowspan="3">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA33.png" style="width:19px;height:65px;"></img>

												</td>

											</tr>

											<tr>

												<td rowspan="2">If revolving balances rise, in 30 days

													<img alt="help" src="https://credit.creditplus.com/shared/images/Icons/Help-Icon.png" title="This assumes on-time monthly payments on all accounts and the stated increase in total revolving balances. A result of 'exceeds limit' means there is not enough available credit to support an increase by the stated dollar amount." style="width:19px;height:18px;padding-left:0.06in;"></img>

												</td>

												<td style="text-align:right;font-size:10pt;padding-right:0.1in;">+$250</td>

												<td class="dark" style="text-align:left;font-size:8pt;">no decrease</td>

												<td style="text-align:right;font-size:10pt;padding-right:0.1in;"></td>

												<td style="text-align:left;"></td>

											</tr>

											<tr>

												<td style="text-align:right;font-size:10pt;padding-right:0.1in;">+$1,000</td>

												<td class="dark" style="text-align:left;font-size:8pt;">no decrease</td>

												<td style="text-align:right;font-size:10pt;padding-right:0.1in;"></td>

												<td style="text-align:left;"></td>

											</tr>

											<tr>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA34.png" style="width:19px;height:19px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA35.png" style="height:19px;width:198px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA36.png" style="width:8px;height:19px;"></img>

												</td>

												<td colspan="2">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA37.png" style="height:19px;width:200px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA38.png" style="width:8px;height:19px;"></img>

												</td>

												<td colspan="2">

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA39.png" style="height:19px;width:191px;"></img>

												</td>

												<td>

													<img alt="" src="https://credit.creditplus.com/shared/images/Border_NA/NA40.png" style="width:19px;height:19px;"></img>

												</td>

											</tr>

										</table>

										<table cellspacing="0" class="RadarTable" style="width:650px;">

											<colgroup>

												<col style="width:5%;"></col>

												<col style="width:95%;"></col>

											</colgroup>

											<tr>

												<td style="padding-left:0.19in;font-size:10.2pt;vertical-align:top;text-align:right;">*</td>

												<td style="text-align:left;padding-right:0.12in;font-size:6.8pt;">"Current" scores are provided by the credit bureaus (see credit scoring section of credit report for details). "Potential" scores and score changes, score "forecast" and score "risk" are provided by CreditXpert Inc. and are not bureau or FICO scores or changes.</td>

											</tr>

											<tr>

												<td colspan="2" class="dark" style="padding-left:0.14in;padding-right:0.12in;font-size:6.7pt;">

													<br />

													<img alt="Powered by CreditXpert" src="https://credit.creditplus.com/shared/images/Icons/CreditXpert-PoweredBy-logo.png" align="left" style="width:137px;height:32px;"></img>CreditXpert(R) products are based on credit report information from the credit bureaus. CreditXpert Inc. ("CXI") is not responsible for inaccurate results, including any due to incorrect, missing, or outdated report information or incorrect assumptions about the future. Scores and score changes predicted by CreditXpert products are only estimates and are not guaranteed. CXI is not affiliated with or endorsed by Equifax, Experian, TransUnion or FICO. CXI is not a credit counseling or credit repair organization. THE FOREGOING IS NOT INTENDED TO PROVIDE OR IMPLY WARRANTIES OF ANY KIND. CREDITXPERT PRODUCTS ARE PROVIDED ON AN "AS IS" BASIS, AND CXI AND ITS DISTRIBUTORS DISCLAIM ANY AND ALL WARRANTIES, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO ANY WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT, SYSTEM INTEGRATION, NON-INTERFERENCE AND/OR ACCURACY OF INFORMATIONAL CONTENT.

												</td>

											</tr>

											<tr>

												<td colspan="2" class="dark" style="font-size:6.8pt;text-align:center;">

													<br />Copyright (c) 2000-2017 CreditXpert Inc. All rights reserved. CreditXpert(R) is a registered trademark of CreditXpert Inc.

												</td>

											</tr>

										</table>

									</span>

								</span>

							</body>

						</html>

						<!-- MCL_END_REPORT:CREDIT_ASSURE -->

						<p style='page-break-after:always'>&nbsp;</p>

						<!-- MCL_BEGIN_REPORT:CREDIT_REPORT -->

						<html>

							<head>

								<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

								<title>MERGED INFILE CREDIT REPORT</title>

								<style type="text/css">body

{

	font-size: 9pt;

	font-family: Arial;

}

.reportbody

{

	font-size: 9pt;

	color: Black;

	font-family: Arial, 'Arial Narrow'

}

.reportlabel

{

	font-weight: bold;

	font-size: 8pt;

	color: Black;

	font-family: Arial;

}

.reportsection

{

	font-weight: bold;

	font-size: 9pt;

	margin-bottom: 0px;

	color: White;

	font-family: Arial;

	background-color: darkcyan;

}

.reporttitle

{

	font-size: 12pt;

	color: Black;

	font-family: 'Arial Black';

}

td.invoiceheader

{

	font-weight: normal;

	font-size: 12pt;

	color: Black;

	font-family: 'Courier New', Arial;

}

.reportheaderlabel

{

	font-weight: bold;

	font-size: 7pt;

	color: Black;

	line-height: 7pt;

	font-family: Arial;

	background-color: lightblue;

}

td

{

	font-size: 9pt;

	color: Black;

	font-family: Arial;

}

.reportbody2

{

	font-size: 9pt;

	color: Black;

	padding-top: 0px;

	background-color: seashell;

}

.historytable

{

}

.footer

{

	font-size: 6pt;

	color: Black;

	line-height: 6pt;

	font-family: 'Arial Narrow';

}

.reportTableBorder

{

	border-collapse: separate;

	border-right: groove 1px DarkGray;

	border-bottom: groove 1px DarkGray;

}

.reportTableBorder td, .reportTableBorder th

{

	border: groove 1px white;

}

.reportTableNoBorder

{

	border: 0px;

}

.reportTableNoBorder td, .reportTableNoBorder th

{

	border: 0px;

}

.cbcreportsection

{

	font-weight: bold;

	font-size: 8.5pt;

}

.cbc-report-section-divider

{

	height: 2px;

	border-width: 0;

	color: Black;

	background-color: Black;

}

BODY

{

    FONT-SIZE: 9pt;

    FONT-FAMILY: Arial

}

.reportbody

{

    FONT-SIZE: 9pt;

    COLOR: black;

    FONT-FAMILY: Arial, 'Arial Narrow'

}

.reportlabel

{

    FONT-WEIGHT: bold;

    FONT-SIZE: 8pt;

    COLOR: black;

    FONT-FAMILY: Arial

}

.reportsection

{

    FONT-WEIGHT: bold;

    FONT-SIZE: 9pt;

    MARGIN-BOTTOM: 0px;

    COLOR: white;

    FONT-FAMILY: 'Arial';

    BACKGROUND-COLOR: darkcyan

}

.reporttitle

{

    FONT-SIZE: 12pt;

    COLOR: black;

    FONT-FAMILY: 'Arial Black'

}

TD.invoiceheader

{

    FONT-WEIGHT: normal;

    FONT-SIZE: 12pt;

    COLOR: black;

    FONT-FAMILY: 'Courier New', Arial

}

.reportheaderlabel

{

    FONT-WEIGHT: bold;

    FONT-SIZE: 7pt;

    COLOR: black;

    LINE-HEIGHT: 7pt;

    FONT-FAMILY: Arial;

    BACKGROUND-COLOR: lightblue

}

TD

{

    FONT-SIZE: 9pt;

    COLOR: black;

    FONT-FAMILY: Arial

}

.reportbody2

{

    FONT-SIZE: 9pt;

    COLOR: black;

    PADDING-TOP: 0px;

    BACKGROUND-COLOR: #dddddd;

}

.historytable

{

}

.footer

{

    FONT-SIZE: 6pt;

    COLOR: black;

    LINE-HEIGHT: 6pt;

    FONT-FAMILY: 'Arial Narrow'

}</style>

								<style type="text/css">

				/*&lt;![CDATA[*/

				.mcl-table-format  { border-width: 0; width: 100%; border-collapse: collapse; }.reportbody  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.reportlabel  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.reporthyperlink  { color: blue; text-decoration: underline; }.reportsection  { font-weight: bold; font-size: 9pt; color: white; font-family: Arial; background-color: darkcyan; }.reporttitle  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.invoiceheader  { font-weight: normal; font-size: 12pt; color: black; font-family: 'Courier New', Arial; }.reportheaderlabel  { font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; background-color: lightblue; }.reportbody2  { font-size: 9pt; color: black; background-color: seashell; }.footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.reportTableBorder  { border-collapse: separate; border-right-style: groove; border-right-width: 1px; border-right-color: DarkGray; border-bottom-style: groove; border-bottom-width: 1px; border-bottom-color: DarkGray; }.reportTableBorder th, .reportTableBorder td { border-style: groove; border-width: 1px; border-color: white; border-right-color: white; border-bottom-color: white; }.reportTableBorder block { border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; }.reportTableNoBorder  { border-width: 0px; }.reportTableNoBorder th, .reportTableNoBorder td { border-width: 0px; }.mcl-report-section  { background-color: darkcyan; font-weight: bold; font-size: 9pt; color: white; font-family: Arial; }.mcl-report-header-label  { background-color: lightblue; font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; }.mcl-report-body2  { background-color: seashell; font-size: 9pt; color: black; }.mcl-tradeline-header td { border-collapse: collapse; border-top-style: solid; border-top-color: darkcyan; border-top-width: 1px; border-right-style: solid; border-right-color: darkcyan; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: darkcyan; border-bottom-width: 1px; border-left-style: solid; border-left-color: darkcyan; border-left-width: 1px; }.mcl-tu-credit-summary-label  { text-align: right; }.mcl-cell-padding td { padding-top: 2px; padding-bottom: 2px; padding-left: 2px; padding-right: 2px; }.mcl-cell-no-padding td { padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; }.mcl-report-body  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.mcl-report-label  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.mcl-hyperlink  { color: blue; text-decoration: underline; }.mcl-hyperlink-help  { color: blue; text-decoration: none; }.mcl-report-title  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.mcl-MLA-disclaimer_dagger  { font-size: 9pt; color: black; font-family: 'Arial Narrow', Arial; font-weight: bold; }.mcl-MLA-disclaimer  { font-size: 8pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-experian-attribute-summary-cell  { font-size: 7pt; }.mcl-checkbox  { width: 14px; height: 14px; outline-color: Black; }

				/*]]&gt;*/

			</style>

								<script type="text/javascript">

									<!--



				// formPostUtil.js parallels the C# implementation of FormPostUtil



// formPostUtil namespace

var formPostUtil;

if (typeof formPostUtil === "undefined") // prevent the formPostUtil variable from being defined more than once. This if-statement is akin to #ifndef in C++ when it comes to including header files.

	formPostUtil =

    {



    	/// <summary>

    	/// splits a url into its path and argument components

    	/// </summary>

    	splitUrl: function (/*string*/ a_sUrl) {

    		var sPath = "";

    		var sArgs = "";

    		var nSplitIndex = a_sUrl.indexOf("?");

    		if ((nSplitIndex < 0) || (nSplitIndex == a_sUrl.length - 1)) {

    			sPath = a_sUrl;

    		}

    		else if (nSplitIndex == 0) {

    			sArgs = a_sUrl;

    		}

    		else {

    			var arrSplitUrl = a_sUrl.split("?");

    			sPath = arrSplitUrl[0];

    			sArgs = arrSplitUrl[1];

    		}

    		return { sPath: sPath, sArgs: sArgs };

    	},



    	/// <summary>

    	/// Make an object out of the full url with query arguments

    	/// </summary>

    	makeQueryObject: function(/*string*/ a_sUrl)

    	{

    		var oReturnValue = {};

    		var sArgs = this.splitUrl(a_sUrl).sArgs;

    		var arrNameValuePairs = this.parseQueryArgs(sArgs);

    		if (arrNameValuePairs == null)

    			arrNameValuePairs = new Array();



    		for (var i = 0; i < arrNameValuePairs.length; ++i) {

    			var nameValuePair = arrNameValuePairs[i];

    			oReturnValue[nameValuePair.Name] = decodeURIComponent(nameValuePair.Value);

    		}

    		return oReturnValue;

    	},



    	/// <summary>

    	/// Redirects to another page.

    	/// </summary>

    	/// <param name="a_windowObj">A reference to the window object</param>

    	/// <param name="a_sAction">The URL to go to</param>

    	/// <param name="a_sTarget">The window target to post to</param>

    	redirect: function(/*object*/a_windowObj, /*string*/a_sAction, /*string*/a_sTarget) {

    		// Split URL



    		var oSplitUrl = this.splitUrl(a_sAction);



    		var sPath = oSplitUrl.sPath;

    		var sArgs = oSplitUrl.sArgs;





    		var arrNameValuePairs = this.parseQueryArgs(sArgs);

    		if (arrNameValuePairs == null)

    			arrNameValuePairs = new Array();



    		var frm = a_windowObj.document.createElement("form");

    		frm.setAttribute("method", "post");

    		frm.setAttribute("action", sPath);

    		if (a_sTarget != null && a_sTarget != "")

    			frm.setAttribute("target", a_sTarget);



    		for (var i = 0; i < arrNameValuePairs.length; ++i) {

    			var nameValuePair = arrNameValuePairs[i];

    			var input = a_windowObj.document.createElement("input");

    			input.type = "hidden";

    			input.name = nameValuePair.Name;

    			input.value = decodeURIComponent(nameValuePair.Value); // expect the value to be url encoded, so url decode the value here.

    			frm.appendChild(input);

    		}



    		a_windowObj.document.body.appendChild(frm);

    		frm.submit();

    		try

    		{

    			a_windowObj.document.body.removeChild(frm); // remove the form because it is no longer needed

    		}

    		catch(ex) {}

    	},



    	/// <summary>

    	/// Returns an array of NameValuePair objects if the query arguments are valid; otherwise, returns null.

    	/// </summary>

    	/*private*/parseQueryArgs: function( /*string*/a_sQueryArgs) {

    		if ((a_sQueryArgs == null) || (a_sQueryArgs.length == 0)) return null;



    		var arrNameValueStrings = a_sQueryArgs.split("&");



    		var arrNameValues = new Array();

    		for (var i = 0; i < arrNameValueStrings.length; ++i) {

    			var sNameValueString = arrNameValueStrings[i];

    			if (sNameValueString.length > 0) // if name-value string contains data (i.e. the following is possible: base_url?&arg0=val0&arg1=val1)

    			{

    				var arrNameAndValue = sNameValueString.split("=");

    				if (arrNameAndValue.length != 2) return null; // invalid query string



    				var sName = arrNameAndValue[0];

    				var sValue = arrNameAndValue[1];

    				if (sName == null || sName.length == 0) return null; // invalid query param name

    				arrNameValues.push(new this.NameValuePair(sName, sValue));

    			}

    		}



    		return arrNameValues;

    	},



    	/// <summary>

    	/// Class for constructing a name-value pair

    	/// </summary>

    	/*private*/NameValuePair: function( /*string*/a_sName, /*string*/a_sValue) {

    		this.Name = a_sName;

    		this.Value = a_sValue;

    	}

    };



				var oPopup = null ;

				function openPopup(sURL)

				{

					// Reuse the popup window may cause problem with some client application (Point 7.0)

					oPopup = window.open("", "Popup", "resizable=yes,scrollbars=yes,menubar=yes,toolbar=yes") ;

					oPopup.focus();



					formPostUtil.redirect( window, sURL, "Popup" );

				}

				function openPopupNoFormPost(sURL)

				{

					// need to user query args if we want to support redirecting from login page

					oPopup = window.open(sURL, "Popup", "resizable=yes,scrollbars=yes,menubar=yes,toolbar=yes") ;

					oPopup.focus();

				}



				function closePopup()

				{

					// Use the closed property to see if the window has been closed.

					if (oPopup && !oPopup.closed)

					{

						oPopup.close() ;

					}

				}



			-->

								</script>

								<script type="text/javascript">

									<!--

				function createRemoteParams()

				{

					return [

						['key', 'rJ21dEt0yOvFsrmTyNuzvt86Q/yjRrhzVOhYTRyRyJk='],

						['orderid', '37574529'],

						['userid', '299696']

					];

				}

				function doHelpPopup(id)

				{

					var rgParams = createRemoteParams();

					rgParams.push(['id', id]);

					doRemotePopup('https://credit.creditplus.com/inetapi/RemoteAgent.aspx?remoteType=onlineHelp', rgParams);

				}

				function externalOpenAddProduct(a_nOrderID)

				{

					var sURL = 'https://credit.creditplus.com/client/SSWRedirector.aspx?creditid=' + encodeURIComponent(a_nOrderID);

					openPopupNoFormPost(sURL);

				}



				function doSupPopup(sBaseUrl, id)

				{

					var rgParams = createRemoteParams();

					rgParams.push(['recordid', id]);

					doRemotePopup(sBaseUrl, rgParams);

				}

				function doOrigPopup(sBaseUrl, id)

				{

					doSupPopup(sBaseUrl, id);

				}

				function doRemotePopup(sBaseUrl, rgParams)

				{

					var sUrl = sBaseUrl;

					for (var i = 0; i < rgParams.length; i++)

					{

						if (i == 0 && sUrl.indexOf('?') < 0)

							sUrl += '?';

						else

							sUrl += '&';

						sUrl += (encodeURIComponent(rgParams[i][0]) + '=' + encodeURIComponent(rgParams[i][1]));

					}

					openPopup(sUrl);

				}

				function externalAddProduct(sURL)

				{

					openPopupNoFormPost(sURL);

				}

				function openAddProduct(a_nOrderID)

				{

					var sURL = "/client/SSWRedirector.aspx?creditid=" + encodeURIComponent(a_nOrderID);

					formPostUtil.redirect(parent.opener, sURL);

				}



			-->

								</script>

							</head>

							<body class="reportbody">

								<span>

									<div>

										<img alt="Logo" src="https://credit.creditplus.com/custom/images/logo.gif" style="border-width:0;"></img>

										<table cellspacing="0" class="mcl-table-format">

											<tr style="vertical-align:bottom;">

												<td class="mcl-report-title">

													<div class="mcl-report-body" style="font-weight:normal;">31550 WINTERPLACE PKWY, SALISBURY, MD  21804</div>

													<div class="mcl-report-body" style="text-align:justify;font-weight:normal;white-space:pre-wrap;">Phone:	(800) 258-3488</div>

													<div class="mcl-report-body" style="text-align:justify;font-weight:normal;white-space:pre-wrap;">Fax:		(800) 258-3287</div>

												</td>

												<td class="mcl-report-title" style="text-align:right;width:19em;">

													<div class="mcl-hyperlink" style="text-align:right;font-weight:bold;font-size:8pt;padding-bottom:5px;">

														<a href="javascript:void(0)" onclick="externalAddProduct('https://credit.creditplus.com/client/SSWRedirector.aspx?creditid=37574529');">Add Product</a>

													</div>

													<div>MERGED INFILE CREDIT REPORT</div>

													<table cellspacing="0" cellpadding="0" class="mcl-report-label mcl-table-format" align="right" style="text-align:justify;font-weight:normal;">

														<tr>

															<td class="mcl-report-label" style="font-weight:normal;">

									Reporting Bureau certifies compliance contractual requirements governing check of public records

									with these results.

								</td>

														</tr>

														<tr>

															<td class="mcl-report-label" style="font-weight:normal;white-space:pre-wrap;">Public Records Found For:

																<input type="checkbox" class="mcl-checkbox" onclick="return false"></input> Applicant

																<input type="checkbox" class="mcl-checkbox" onclick="return false"></input> Spouse

															</td>

														</tr>

													</table>

												</td>

											</tr>

										</table>

									</div>

									<table cellspacing="0" cellpadding="0" style="width:100%;">

										<thead>

											<tr>

												<td>

													<div class="mcl-report-section">

														<br />

													</div>

													<table cellspacing="0" class="mcl-table-format mcl-cell-padding">

														<colgroup>

															<col style="width:17%;"></col>

															<col style="width:8%;"></col>

															<col style="width:25%;"></col>

															<col style="width:15%;"></col>

															<col style="width:10%;"></col>

															<col style="width:10%;"></col>

															<col style="width:15%;"></col>

														</colgroup>

														<tr>

															<td class="mcl-report-label" style="min-width:120px;">FILE #</td>

															<td class="mcl-report-body">37574529</td>

															<td class="mcl-report-body">

																<span class="mcl-report-label">  FNMA #  </span>

															</td>

															<td class="mcl-report-label" style="min-width:100px;">DATE COMPLETED</td>

															<td class="mcl-report-body" style="min-width:80px;">2/16/2017</td>

															<td class="mcl-report-label" style="min-width:67px;">RQD' BY</td>

															<td class="mcl-report-body" style="vertical-align:top;">BESMARTEE</td>

														</tr>

														<tr>

															<td class="mcl-report-label">SEND TO</td>

															<td colspan="2" class="mcl-report-body">CREDIT PLUS of SALISBURY</td>

															<td class="mcl-report-label">DATE ORDERED</td>

															<td class="mcl-report-body">2/16/2017</td>

															<td colspan="2" class="mcl-report-label"></td>

														</tr>

														<tr>

															<td class="mcl-report-label"></td>

															<td colspan="2" class="mcl-report-body">

							CUST. # 99999</td>

															<td class="mcl-report-label">REPOSITORIES</td>

															<td class="mcl-report-body">XP/TU/EF</td>

															<td class="mcl-report-label">PRPD' BY</td>

															<td class="mcl-report-body"></td>

														</tr>

														<tr>

															<td class="mcl-report-label"></td>

															<td colspan="2" class="mcl-report-body">31550 WINTERPLACE PKWY</td>

															<td class="mcl-report-label">PRICE</td>

															<td class="mcl-report-body">$0.45</td>

															<td class="mcl-report-label">LOAN TYPE</td>

															<td class="mcl-report-body"></td>

														</tr>

														<tr>

															<td class="mcl-report-label"></td>

															<td colspan="2" class="mcl-report-body">SALISBURY, MD  21804</td>

															<td class="mcl-report-label">REF. #</td>

															<td colspan="3" class="mcl-report-body"></td>

														</tr>

														<tr>

															<td class="mcl-report-label">PROPERTY ADDRESS</td>

															<td colspan="6" class="mcl-report-body"></td>

														</tr>

													</table>

													<table cellspacing="0" class="mcl-report-section mcl-table-format" style="text-align:center;">

														<colgroup>

															<col style="width:50%;"></col>

															<col style="width:50%;"></col>

														</colgroup>

														<tr>

															<td class="mcl-report-section">APPLICANT</td>

															<td class="mcl-report-section">CO-APPLICANT</td>

														</tr>

													</table>

													<table cellspacing="0" class="mcl-table-format mcl-cell-padding">

														<colgroup>

															<col style="width:16%;"></col>

															<col style="width:15%;"></col>

															<col style="width:5%;"></col>

															<col style="width:14%;"></col>

															<col style="width:16%;"></col>

															<col style="width:15%;"></col>

															<col style="width:5%;"></col>

															<col style="width:14%;"></col>

														</colgroup>

														<tr>

															<td class="mcl-report-label" style="min-width:120px;">APPLICANT</td>

															<td colspan="3" class="mcl-report-body">TESTCASE, TIM  </td>

															<td class="mcl-report-label" style="min-width:100px;">CO-APPLICANT</td>

															<td colspan="3" class="mcl-report-body"></td>

														</tr>

														<tr>

															<td class="mcl-report-label">SOC SEC #</td>

															<td class="mcl-report-body" style="min-width:100px;">123-45-6789</td>

															<td class="mcl-report-label" style="min-width:30px;">DOB</td>

															<td class="mcl-report-body" style="min-width:97px;">1/1/1999</td>

															<td class="mcl-report-label">SOC SEC #</td>

															<td class="mcl-report-body" style="min-width:100px;"></td>

															<td class="mcl-report-label" style="min-width:30px;">DOB</td>

															<td class="mcl-report-body" style="min-width:97px;"></td>

														</tr>

														<tr>

															<td class="mcl-report-label">MARITAL STATUS</td>

															<td colspan="3" class="mcl-report-body"></td>

															<td class="mcl-report-label">DEPENDENTS </td>

															<td colspan="3" class="mcl-report-body"></td>

														</tr>

													</table>

												</td>

											</tr>

										</thead>

										<tbody>

											<tr>

												<td>

													<span>

														<table cellspacing="0" class="mcl-table-format mcl-cell-padding">

															<colgroup>

																<col style="width:16%;"></col>

																<col style="width:49%;"></col>

																<col style="width:7%;"></col>

																<col style="width:28%;"></col>

															</colgroup>

															<tr style="vertical-align:top;">

																<td class="mcl-report-label">CURRENT ADDRESS</td>

																<td class="mcl-report-body">4053 ALADDIN DR, HUNTINGTON BEACH, CA 92649</td>

																<td class="mcl-report-label">LENGTH</td>

																<td class="mcl-report-body"></td>

															</tr>

															<tr style="vertical-align:top;">

																<td class="mcl-report-label">PREVIOUS ADDRESS</td>

																<td class="mcl-report-body"></td>

																<td class="mcl-report-label">LENGTH</td>

																<td class="mcl-report-body"></td>

															</tr>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">SCORE MODELS</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-body">EXPERIAN/FAIR, ISAAC -

				TIM TESTCASE - *****7766

																			<br />SCORE:



																			<span style="font-weight:bold;">345</span>

																			<br />02 - LEVEL OF DELINQUENCY ON ACCOUNTS

																			<br />20 - TIME SINCE DEROGATORY PUBLIC RECORD OR COLLECTION IS TOO SHORT

																			<br />18 - NUMBER OF ACCOUNTS WITH DELINQUENCY

																			<br />10 - PROPORTION OF BALANCE TO HIGH CREDIT ON BANK REVOLVING OR ALL REVOLVING ACCOUNTS

																			<br />

																		</div>

																		<hr></hr>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<div style="border-bottom-style:none;width:99.9%;">

															<table cellspacing="0" style="width:100%;border-collapse:collapse;border-style:none;">

																<tr>

																	<td style="width:50%;">

																		<a href="javascript:void(0)" onclick="doSupPopup('https://credit.creditplus.com/shared/supplements/remote/RemoteTradeEdit.aspx', '0'); return(false);" class="mcl-hyperlink" style="font-weight:bold;font-size:8pt;">Request New Tradeline</a>

																	</td>

																	<td style="width:50%;text-align:right;"></td>

																</tr>

															</table>

														</div>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">CREDIT</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" cellpadding="0" class="mcl-report-body mcl-cell-padding" style="width:100%;border-collapse:collapse;">

																			<colgroup>

																				<col style="width:2%;"></col>

																				<col style="width:2%;"></col>

																				<col style="width:20%;"></col>

																				<col style="width:7%;"></col>

																				<col style="width:6%;"></col>

																				<col style="width:8%;"></col>

																				<col style="width:8%;"></col>

																				<col style="width:8%;"></col>

																				<col style="width:4%;"></col>

																				<col style="width:3%;"></col>

																				<col style="width:3%;"></col>

																				<col style="width:3%;"></col>

																				<col style="width:12%;"></col>

																			</colgroup>

																			<thead>

																				<tr class="mcl-report-section mcl-tradeline-header" style="text-align:center;vertical-align:middle;">

																					<td rowspan="2" class="mcl-report-header-label">

											E

																						<br />C

																						<br />O

																						<br />A



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">

											W

																						<br />H

																						<br />O

																						<br />S

																						<br />E



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">CREDITOR</td>

																					<td rowspan="2" class="mcl-report-header-label">

											DATE

																						<br />REPORTED



																					</td>

																					<td class="mcl-report-header-label">DATE OPENED</td>

																					<td class="mcl-report-header-label">HIGH CREDIT OR LIMIT</td>

																					<td class="mcl-report-header-label">BALANCE</td>

																					<td rowspan="2" class="mcl-report-header-label">

											PAST

																						<br />DUE



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">

											MO

																						<br />REV



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">30</td>

																					<td rowspan="2" class="mcl-report-header-label">60</td>

																					<td rowspan="2" class="mcl-report-header-label">90+</td>

																					<td class="mcl-report-header-label">STATUS</td>

																				</tr>

																				<tr class="mcl-report-section mcl-tradeline-header" style="text-align:center;vertical-align:middle;">

																					<td class="mcl-report-header-label">DLA</td>

																					<td class="mcl-report-header-label">ACCT TYPE</td>

																					<td class="mcl-report-header-label">TERMS</td>

																					<td class="mcl-report-header-label">SOURCE</td>

																				</tr>

																			</thead>

																			<tbody>

																				<tr id="TradeLine_1" style="vertical-align:top;">

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">B</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">B</td>

																					<td class="mcl-report-body" style="padding-top:1em;">

																						<a href="/shared/blank.aspx" onclick="doSupPopup('https://credit.creditplus.com/shared/supplements/remote/RemoteTradeEdit.aspx', '19'); return(false);" class="mcl-hyperlink">1ST OMNI CARD</a>

																						<br />411049******

																					</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">11/04</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">03/99

																						<br />11/04

																					</td>

																					<td class="mcl-report-body" style="text-align:right;padding-top:1em;">$8000

																						<br />REV

																					</td>

																					<td class="mcl-report-body" style="text-align:right;padding-top:1em;">$7483

																						<br />



							$145

																					</td>

																					<td class="mcl-report-body" style="text-align:right;padding-top:1em;">$0</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">25</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body" style="padding-top:1em;">AS AGREED

																						<br />

																						<a href="/shared/blank.aspx" onclick="doOrigPopup('https://credit.creditplus.com/shared/reports/remote/RemoteOrigTrade.aspx', '19'); return(false);" class="mcl-hyperlink" style="font-weight:normal;">XP</a>

																					</td>

																				</tr>

																				<tr id="TradeLine_2">

																					<td class="mcl-report-body" style="padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;"></td>

																					<td class="mcl-report-body" style="padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;"></td>

																					<td colspan="11" class="mcl-report-body" style="vertical-align:top;padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;">

																						<div>ACCOUNT DISPUTED BY CONSUMER AND DENIED BY CREDITOR</div>

																					</td>

																				</tr>

																				<tr id="TradeLine_4" style="vertical-align:top;">

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">J</td>

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">B</td>

																					<td class="mcl-report-body2" style="padding-top:1em;">

																						<a href="/shared/blank.aspx" onclick="doSupPopup('https://credit.creditplus.com/shared/supplements/remote/RemoteTradeEdit.aspx', '17'); return(false);" class="mcl-hyperlink">BANK ONE</a>

																						<br />501265******

																					</td>

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">11/04</td>

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">02/98

																						<br />11/04

																					</td>

																					<td class="mcl-report-body2" style="text-align:right;padding-top:1em;">$5000

																						<br />REV

																					</td>

																					<td class="mcl-report-body2" style="text-align:right;padding-top:1em;">$1892

																						<br />010



							$49

																					</td>

																					<td class="mcl-report-body2" style="text-align:right;padding-top:1em;">$0</td>

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">69</td>

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body2" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body2" style="padding-top:1em;">AS AGREED

																						<br />

																						<a href="/shared/blank.aspx" onclick="doOrigPopup('https://credit.creditplus.com/shared/reports/remote/RemoteOrigTrade.aspx', '17'); return(false);" class="mcl-hyperlink" style="font-weight:normal;">XP</a>

																					</td>

																				</tr>

																				<tr id="TradeLine_5">

																					<td class="mcl-report-body2" style="padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;"></td>

																					<td class="mcl-report-body2" style="padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;"></td>

																					<td colspan="11" class="mcl-report-body2" style="vertical-align:top;padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;">

																						<div>ACCOUNT DISPUTED BY CONSUMER AND DENIED BY CREDITOR</div>

																					</td>

																				</tr>

																			</tbody>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">COLLECTION ACCOUNTS</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" cellpadding="0" class="mcl-report-body mcl-cell-padding" style="width:100%;border-collapse:collapse;">

																			<colgroup>

																				<col style="width:2%;"></col>

																				<col style="width:2%;"></col>

																				<col style="width:20%;"></col>

																				<col style="width:7%;"></col>

																				<col style="width:6%;"></col>

																				<col style="width:8%;"></col>

																				<col style="width:8%;"></col>

																				<col style="width:8%;"></col>

																				<col style="width:4%;"></col>

																				<col style="width:3%;"></col>

																				<col style="width:3%;"></col>

																				<col style="width:3%;"></col>

																				<col style="width:12%;"></col>

																			</colgroup>

																			<thead>

																				<tr class="mcl-report-section mcl-tradeline-header" style="text-align:center;vertical-align:middle;">

																					<td rowspan="2" class="mcl-report-header-label">

											E

																						<br />C

																						<br />O

																						<br />A



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">

											W

																						<br />H

																						<br />O

																						<br />S

																						<br />E



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">CREDITOR</td>

																					<td rowspan="2" class="mcl-report-header-label">

											DATE

																						<br />REPORTED



																					</td>

																					<td class="mcl-report-header-label">DATE OPENED</td>

																					<td class="mcl-report-header-label">HIGH CREDIT OR LIMIT</td>

																					<td class="mcl-report-header-label">BALANCE</td>

																					<td rowspan="2" class="mcl-report-header-label">

											PAST

																						<br />DUE



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">

											MO

																						<br />REV



																					</td>

																					<td rowspan="2" class="mcl-report-header-label">30</td>

																					<td rowspan="2" class="mcl-report-header-label">60</td>

																					<td rowspan="2" class="mcl-report-header-label">90+</td>

																					<td class="mcl-report-header-label">STATUS</td>

																				</tr>

																				<tr class="mcl-report-section mcl-tradeline-header" style="text-align:center;vertical-align:middle;">

																					<td class="mcl-report-header-label">DLA</td>

																					<td class="mcl-report-header-label">ACCT TYPE</td>

																					<td class="mcl-report-header-label">TERMS</td>

																					<td class="mcl-report-header-label">SOURCE</td>

																				</tr>

																			</thead>

																			<tbody>

																				<tr id="TradeLine_1" style="vertical-align:top;font-weight:bold;">

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">B</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">B</td>

																					<td class="mcl-report-body" style="padding-top:1em;">

																						<a href="/shared/blank.aspx" onclick="doSupPopup('https://credit.creditplus.com/shared/supplements/remote/RemoteTradeEdit.aspx', '21'); return(false);" class="mcl-hyperlink">E-Z COLLECTIONS</a>

																						<br />45211968

																					</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">05/04</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">05/04

																						<br />11/04

																					</td>

																					<td class="mcl-report-body" style="text-align:right;padding-top:1em;">$172

																						<br />OTHE

																					</td>

																					<td class="mcl-report-body" style="text-align:right;padding-top:1em;">$172

																						<br />

					-

																					</td>

																					<td class="mcl-report-body" style="text-align:right;padding-top:1em;">-</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body" style="text-align:center;padding-top:1em;">0</td>

																					<td class="mcl-report-body" style="padding-top:1em;">COLLECTION

																						<br />

																						<a href="/shared/blank.aspx" onclick="doOrigPopup('https://credit.creditplus.com/shared/reports/remote/RemoteOrigTrade.aspx', '21'); return(false);" class="mcl-hyperlink" style="font-weight:normal;">

																							<span style="font-weight:bold;">XP</span>

																						</a>

																					</td>

																				</tr>

																				<tr id="TradeLine_2" style="font-weight:bold;">

																					<td class="mcl-report-body" style="padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;"></td>

																					<td class="mcl-report-body" style="padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;"></td>

																					<td colspan="11" class="mcl-report-body" style="vertical-align:top;padding-bottom:1em;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#808080;">

																						<div>ORIGINAL CREDITOR: ABC CELLULAR</div>

																					</td>

																				</tr>

																			</tbody>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">OTHER CREDIT HISTORY</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-body" style="text-align:center;">*** NONE ***</div>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">INQUIRIES (LAST 120 DAYS)</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-body" style="text-align:center;">*** NONE ***</div>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">PUBLIC RECORDS</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-body" style="text-align:center;">*** NONE ***</div>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">TRADE SUMMARY</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-table-format mcl-cell-padding" align="center" style="width:71%;padding-top:2px;padding-bottom:2px;padding-left:2px;padding-right:2px;text-align:right;">

																			<colgroup>

																				<col style="width:16%;"></col>

																				<col style="width:11%;"></col>

																				<col style="width:11%;"></col>

																				<col style="width:11%;"></col>

																				<col style="width:11%;"></col>

																				<col style="width:11%;"></col>

																			</colgroup>

																			<tr class="mcl-report-label" style="vertical-align:top;">

																				<td></td>

																				<td>#</td>

																				<td>BALANCE</td>

																				<td>HIGH CREDIT</td>

																				<td>PAYMENTS</td>

																				<td>PAST DUE</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">MORTGAGE</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">AUTO</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">EDUCATION</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">OTHER INSTALLMENT</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">OPEN</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">REVOLVING</td>

																				<td class="mcl-report-body">2</td>

																				<td class="mcl-report-body">9375</td>

																				<td class="mcl-report-body">13000</td>

																				<td class="mcl-report-body">194</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">OTHER</td>

																				<td class="mcl-report-body">1</td>

																				<td class="mcl-report-body">172</td>

																				<td class="mcl-report-body">172</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">TOTAL</td>

																				<td class="mcl-report-body">3</td>

																				<td class="mcl-report-body">9547</td>

																				<td class="mcl-report-body">13172</td>

																				<td class="mcl-report-body">194</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td colspan="6">

																					<hr></hr>

																				</td>

																			</tr>

																			<tr>

																				<td colspan="2" class="mcl-report-label">SECURED DEBT</td>

																				<td class="mcl-report-body">0</td>

																				<td colspan="2" class="mcl-report-label">OLDEST TRADELINE</td>

																				<td class="mcl-report-body">02/98</td>

																			</tr>

																			<tr>

																				<td colspan="2" class="mcl-report-label">UNSECURED DEBT</td>

																				<td class="mcl-report-body">9547</td>

																				<td colspan="2" class="mcl-report-label">DEBT/HIGH CREDIT</td>

																				<td class="mcl-report-body" title="Debt/High Credit ratio = Total Balance/Total High Credit (High Credit from accounts that are collections, chargeoff, bankruptcy, or closed are excluded)">73%</td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">DEROGATORY SUMMARY</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-table-format mcl-cell-padding" align="center" style="width:62%;padding-top:2px;padding-bottom:2px;padding-left:2px;padding-right:2px;text-align:right;">

																			<colgroup>

																				<col style="width:15%;"></col>

																				<col style="width:4%;"></col>

																				<col style="width:12%;"></col>

																				<col style="width:4%;"></col>

																				<col style="width:16%;"></col>

																				<col style="width:11%;"></col>

																			</colgroup>

																			<tr style="vertical-align:top;">

																				<td class="mcl-report-label">CHARGE OFFS:</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-label">30 DAYS:</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-label">INQUIRIES:</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr style="vertical-align:top;">

																				<td class="mcl-report-label">COLLECTIONS:</td>

																				<td class="mcl-report-body">1</td>

																				<td class="mcl-report-label">60 DAYS:</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-label">MOST RECENT LATE:</td>

																				<td class="mcl-report-body">undetermined</td>

																			</tr>

																			<tr style="vertical-align:top;">

																				<td class="mcl-report-label">BANKRUPTCY:</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-label">90 DAYS:</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-label">DISPUTES:</td>

																				<td class="mcl-report-body">2</td>

																			</tr>

																			<tr style="vertical-align:top;">

																				<td class="mcl-report-label">PUBLIC RECORDS:</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-label">OTHER:</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body"></td>

																				<td class="mcl-report-body"></td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">TU HIGH RISK FRAUD ALERT</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-body" style="padding-top:2px;padding-bottom:2px;padding-left:2px;padding-right:2px;">*** HIGH RISK FRAUD ALERT ***

																			<br />2 - TESTCASE, TIM

																			<br />AVAILABLE AND CLEAR

																			<br />

																		</div>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">EQUIFAX IDENTITY SCAN</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-body" style="padding-top:2px;padding-bottom:2px;padding-left:2px;padding-right:2px;">*** IDENTITY SCAN ***

																			<br />3 - TESTCASE, TIM

																			<br />* 9 - INQUIRY SSN IS INVALID

																			<br />* 8 - UNABLE TO PERFORM TELEPHONE VALIDATION DUE TO INSUFFICIENT TELEPHONE INPUT

																			<br />

																		</div>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">ALERT</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td>1 - EXPERIAN ID FRAUD VICTIM ALERT ON FILE.  DO NOT EXTEND CREDIT WITHOUT VERIFYING CONSUMER INFORMATION.

																					<br />

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td>1 - TIM TESTCASE YOB: 1963

EXPERIAN OFAC NAME MATCHING SERVICE: NO MATCH FOUND UNLESS OTHERWISE INDICATED

																					<br />

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td>2 - TRANSUNION OFAC NAME SCREEN: CLEAR

																					<br />

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td>3 - EQUIFAX OFAC ALERT: NOTHING TO REPORT

NO MATCH FOUND IN CDC'S OFAC DATABASE.

																					<br />

																				</td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">MISCELLANEOUS INFORMATION</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;"> -

																					<span>Instant View Password: AV-14AFEDD</span>

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;"> -

																					<span>To verify the authenticity of this credit report, please visit https://credit.creditplus.com and click on the Instant View link.  Enter Identifier # 37574529 and password AV-14AFEDD to view the report. For any inquiries regarding this report or services provided by CREDIT PLUS please contact us at (800) 258-3488.</span>

																				</td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">SOURCE OF INFORMATION</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-no-padding" style="text-align:left;">

																			<colgroup>

																				<col style="width:4%;"></col>

																				<col style="width:96%;"></col>

																			</colgroup>

																			<tr>

																				<td>1</td>

																				<td>EXPERIAN - PULLED ON: 11/18/04</td>

																			</tr>

																			<tr>

																				<td></td>

																				<td>

																					<span class="mcl-report-body">

			NAME: TIM TESTCASE *****7766 DOB: N/A DL: C6 011238

																						<br />

																					</span>

																					<span class="mcl-report-body">

			SSN: *****7766

																						<br />

																					</span>

																					<span class="mcl-report-body">

			ADDRESS: 328 ANAHEIM BLVD/ORANGE CA 92868

				- REPORTED 11/02 - 10/04

																						<br />

																					</span>

																					<span class="mcl-report-body">

			ADDRESS: 4311 LEWIS #D25/IRVINE CA 92714

				- REPORTED 07/99 - 10/02

																						<br />

																					</span>

																					<span class="mcl-report-body">

			EMPLOYER: FLUOR ELECTRONICS//5362 MESA DR, SANTA ANA CA

				- REPORTED 10/02

																						<br />

																					</span>

																				</td>

																			</tr>

																			<tr>

																				<td colspan="2"></td>

																			</tr>

																			<tr>

																				<td>2</td>

																				<td>TRANSUNION - PULLED ON: 02/16/17

					- INFILE DATE: 02/16/17</td>

																			</tr>

																			<tr>

																				<td></td>

																				<td>*** NO RECORD FOUND ***</td>

																			</tr>

																			<tr>

																				<td colspan="2"></td>

																			</tr>

																			<tr>

																				<td>3</td>

																				<td>EQUIFAX - PULLED ON: 02/16/17

					- INFILE DATE: N/A</td>

																			</tr>

																			<tr>

																				<td></td>

																				<td>*** NO RECORD FOUND ***</td>

																			</tr>

																			<tr>

																				<td colspan="2"></td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">CREDITORS</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-table-format mcl-cell-padding">

																			<colgroup>

																				<col style="width:22%;"></col>

																				<col style="width:65%;"></col>

																				<col style="width:13%;"></col>

																			</colgroup>

																			<tr class="mcl-report-body" style="vertical-align:top;">

																				<td class="mcl-report-body">BANK OF VERMONT</td>

																				<td class="mcl-report-body">148 COLLEGE STREET, BURLINGTON VT 05402</td>

																				<td class="mcl-report-body" style="text-align:right;">(802) 658-1816</td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">REMARKS</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;">1 -

																					<span>CONSUMER STATEMENT: 04-15-96  "MY IDENTIFICATION HAS BEEN USED, WITHOUT MY CONSENT, ON APPLICATIONS TO OBTAIN CREDIT. VERBAL CONFIRMATION FROM ME AT (714)555-1234 (HOME) OR (714)555-1232 (WORK) IS REQUESTED PRIOR TO CREDIT APPROVAL</span>

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;">2 -

																					<span>TRANSUNION ADD-ON: PRODUCT CODE 07011 [GEO CODE] NOT RETURNED BECAUSE THE REQUESTED INFORMATION CANNOT BE SCORED OR RETURNED BECAUSE DATA IS SUPPRESSED OR CANNOT BE EVALUATED</span>

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;">2 -

																					<span>TRANSUNION ADD-ON: PRODUCT CODE 07640 [INQUIRY ANALYSIS] NOT RETURNED BECAUSE THE REQUESTED INFORMATION CANNOT BE SCORED OR RETURNED BECAUSE DATA IS SUPPRESSED OR CANNOT BE EVALUATED</span>

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;">2 -

																					<span>TRANSUNION ADD-ON: PRODUCT CODE 07013 [ARM ALERT] NOT RETURNED BECAUSE THE REQUESTED INFORMATION CANNOT BE SCORED OR RETURNED BECAUSE DATA IS SUPPRESSED OR CANNOT BE EVALUATED</span>

																				</td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">DISCLAIMER</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;"> -

																					<span>

																						<br />An asterisk (*) following the payment amount indicates the repositories have no payment data and that the amount was automatically calculated as a percentage of the account balance.

																						<br />

																					</span>

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;"> -

																					<span>

																						<br />This is a report containing information supplied by the repositories listed above. The merge process is automated and the report may include some duplications and/or omissions. Inquiries regarding any disputed items should be directed to the creditor reporting the item, or to the appropriate repository service center(s) listed below.

																						<br />

																					</span>

																				</td>

																			</tr>

																		</table>

																		<table cellspacing="0" class="mcl-report-body mcl-table-format mcl-cell-padding">

																			<tr>

																				<td style="word-wrap:break-word;max-width:60em;text-align:center;"> - </td>

																			</tr>

																		</table>

																		<div>

																			<table cellspacing="0" class="mcl-report-body mcl-cell-padding" align="center" style="border-width:0;width:80%;text-align:left;">

																				<tr style="vertical-align:top;">

																					<td>EXPERIAN</td>

																					<td>TRANSUNION</td>

																					<td>EQUIFAX</td>

																				</tr>

																				<tr style="vertical-align:top;">

																					<td>PO BOX 4500</td>

																					<td>PO BOX 2000</td>

																					<td>PO BOX 740241</td>

																				</tr>

																				<tr style="vertical-align:top;">

																					<td>ALLEN, TX 75013</td>

																					<td>CHESTER, PA 19016</td>

																					<td>ATLANTA, GA 30374</td>

																				</tr>

																				<tr style="vertical-align:top;">

																					<td>888-397-3742</td>

																					<td>800-888-4213</td>

																					<td>800-685-1111</td>

																				</tr>

																				<tr style="vertical-align:top;">

																					<td>www.experian.com/reportaccess</td>

																					<td>transunion.com/myoptions</td>

																					<td>www.equifax.com/fcra</td>

																				</tr>

																			</table>

																		</div>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<span>

														<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

															<thead>

																<tr>

																	<td style="border-collapse: separate;">

																		<div class="mcl-report-section" style="text-align:center;">TREND SUMMARY</div>

																	</td>

																</tr>

															</thead>

															<tbody>

																<tr>

																	<td style="border-collapse: separate;">

																		<table cellspacing="0" class="mcl-table-format mcl-cell-padding" align="center" style="width:85%;padding-top:2px;padding-bottom:2px;padding-left:2px;padding-right:2px;text-align:right;">

																			<colgroup>

																				<col style="width:25%;"></col>

																				<col style="width:12.5%;"></col>

																				<col style="width:12.5%;"></col>

																				<col style="width:12.5%;"></col>

																				<col style="width:12.5%;"></col>

																				<col style="width:12.5%;"></col>

																				<col style="width:12.5%;"></col>

																			</colgroup>

																			<tr>

																				<td class="mcl-report-body" style="text-align:right;font-weight:bold;">PAYMENT BEHAVIOR:</td>

																				<td colspan="2" class="mcl-report-body" style="text-align:center;">INACTIVE</td>

																				<td colspan="2" class="mcl-report-body" style="text-align:right;font-weight:bold;">PAYMENT RATIO:</td>

																				<td colspan="2" class="mcl-report-body" style="text-align:center;">N/A</td>

																			</tr>

																			<tr>

																				<td colspan="7">

																					<hr></hr>

																				</td>

																			</tr>

																			<tr>

																				<td colspan="7" class="mcl-report-body" style="text-align:left;font-weight:bold;">

					REVOLVING ACCOUNTS

				</td>

																			</tr>

																			<tr class="mcl-report-label" style="vertical-align:top;">

																				<td></td>

																				<td>1 MO. AGO</td>

																				<td>2 MO. AGO</td>

																				<td>3 MO. AGO</td>

																				<td>6 MO. AGO</td>

																				<td>12 MO. AGO</td>

																				<td>24 MO. AGO</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label"># OPEN ACCOUNTS</td>

																				<td class="mcl-report-body">2</td>

																				<td class="mcl-report-body">2</td>

																				<td class="mcl-report-body">2</td>

																				<td class="mcl-report-body">2</td>

																				<td class="mcl-report-body">2</td>

																				<td class="mcl-report-body">2</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label"># ACTIVE ACCOUNTS</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">CREDIT LIMIT</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">PREV BALANCE</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">BALANCE</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">SCHEDULED PAYMENT</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">ACTUAL PAYMENT</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td colspan="7" class="mcl-report-body" style="text-align:left;font-weight:bold;">

					NON-REVOLVING ACCOUNTS

				</td>

																			</tr>

																			<tr class="mcl-report-label" style="vertical-align:top;">

																				<td></td>

																				<td>1 MO. AGO</td>

																				<td>2 MO. AGO</td>

																				<td>3 MO. AGO</td>

																				<td>6 MO. AGO</td>

																				<td>12 MO. AGO</td>

																				<td>24 MO. AGO</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">BALANCE</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																			<tr>

																				<td class="mcl-report-label">PAYMENT</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																				<td class="mcl-report-body">0</td>

																			</tr>

																		</table>

																	</td>

																</tr>

															</tbody>

														</table>

													</span>

													<div class="mcl-report-label" style="text-align:center;">

														<br />*** END OF REPORT 2/16/2017 9:22:00 AM ***

														<br />

													</div>

												</td>

											</tr>

										</tbody>

										<tfoot>

											<tr>

												<td>

													<div class="mcl-report-label" style="text-align:center;">

														<br />

														<span style="font-size:x-small;">ECOA KEY: B=BORROWER; C=CO-BORROWER; J=JOINT; U=UNDESIGNATED; A=AUTHORIZED USER; P=PARTICIPANT; S=CO-SIGNER</span>

														<hr></hr>CREDIT PLUS: 31550 WINTERPLACE PKWY, SALISBURY, MD 21804 (P) (800) 258-3488 (F) (800) 258-3287

													</div>

													<div class="mcl-footer">

				The information is furnished in response to an inquiry for the purpose of evaluating credit risks. It has been obtained from sources deemed reliable, the accuracy of which this organization does not guarantee. The inquirer has agreed to indemnify that reporting bureau for any damage arising from misuse of this information, and this report is furnished in reliance upon that indemnity. It must be held in strict confidence and complies with the provisions of Public Law 91-508, the Fair Credit Reporting Act. Reporting bureau certifies that all Residential Mortgage Credit Reports meet the standards prescribed by FNMA, FHMC, FHA, VA and the Farmers Home Administration.

			</div>

												</td>

											</tr>

										</tfoot>

									</table>

								</span>

							</body>

						</html>

						<!-- MCL_END_REPORT:CREDIT_REPORT -->

						<p style='page-break-after:always'>&nbsp;</p>

						<!-- MCL_BEGIN_REPORT:RISK_BASED_PRICING_DISCLOSURE_MORTGAGE_MID -->

						<html>

							<head>

								<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

								<title>Risk Based Pricing Disclosure</title>

								<style type="text/css">

				/*&lt;![CDATA[*/

				.riskbased-table-format  { border-width: 0; width: 100%; border-collapse: collapse; }.riskbased-table-ie-compatibility  { border-collapse: collapse; margin-left: auto; margin-right: auto; }@media print{.riskbased-address  { font-size: 8pt; }}@media print{.riskbased-body  { font-size: 7pt; }}@media print{.riskbased-table  { font-size: 7pt; }}@media print{.riskbased-table td { font-size: 7pt; }}@media print{.riskbased-section-content-space  { line-height: 7pt; height: 10px; }}@media print{.riskbased-reportsection  { line-height: 8pt; }}.riskbased-address  { font-size: 9pt; }.riskbased-body  { font-size: 8pt; }.riskbased-table  { font-size: 8pt; }.riskbased-section-content-space  { line-height: 9pt; height: 16px; }.riskbased-reportsection  { line-height: 9pt; }.riskbased-table  { width: 100%; }.riskbased-cell td { vertical-align: top; }.riskbased-cell-border td { border-top-style: solid; border-top-color: Gray; border-top-width: 1px; border-right-style: solid; border-right-color: Gray; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: Gray; border-bottom-width: 1px; border-left-style: solid; border-left-color: Gray; border-left-width: 1px; }.riskbased-cell-border block { border-top-style: none; border-top-width: 0; border-right-style: none; border-right-width: 0; border-bottom-style: none; border-bottom-width: 0; border-left-style: none; border-left-width: 0; padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; }.riskbased-cell-border ul { border-top-style: none; border-top-width: 0; border-right-style: none; border-right-width: 0; border-bottom-style: none; border-bottom-width: 0; border-left-style: none; border-left-width: 0; }.riskbased-cell-padding td { padding-top: 2px; padding-bottom: 2px; padding-left: 3px; padding-right: 3px; }.riskbased-column-label  { background-color: silver; font-weight: bold; }.riskbased-reportsection  { font-weight: bold; color: white; font-family: Arial; background-color: darkcyan; }.riskbased-section-space  { line-height: 5pt; height: 8px; }.riskbased-list  { list-style-position: inside; margin: 0; padding-top: 0; padding-bottom: 0; padding-left: 3em; padding-right: 0; }.reportbody  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.reportlabel  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.reporthyperlink  { color: blue; text-decoration: underline; }.reportsection  { font-weight: bold; font-size: 9pt; color: white; font-family: Arial; background-color: darkcyan; }.reporttitle  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.invoiceheader  { font-weight: normal; font-size: 12pt; color: black; font-family: 'Courier New', Arial; }.reportheaderlabel  { font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; background-color: lightblue; }.reportbody2  { font-size: 9pt; color: black; background-color: seashell; }.footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.reportTableBorder  { border-collapse: separate; border-right-style: groove; border-right-width: 1px; border-right-color: DarkGray; border-bottom-style: groove; border-bottom-width: 1px; border-bottom-color: DarkGray; }.reportTableBorder th, .reportTableBorder td { border-style: groove; border-width: 1px; border-color: white; border-right-color: white; border-bottom-color: white; }.reportTableBorder block { border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; }.reportTableNoBorder  { border-width: 0px; }.reportTableNoBorder th, .reportTableNoBorder td { border-width: 0px; }.mcl-report-section  { background-color: darkcyan; font-weight: bold; font-size: 9pt; color: white; font-family: Arial; }.mcl-report-header-label  { background-color: lightblue; font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; }.mcl-report-body2  { background-color: seashell; font-size: 9pt; color: black; }.mcl-tradeline-header td { border-collapse: collapse; border-top-style: solid; border-top-color: darkcyan; border-top-width: 1px; border-right-style: solid; border-right-color: darkcyan; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: darkcyan; border-bottom-width: 1px; border-left-style: solid; border-left-color: darkcyan; border-left-width: 1px; }.mcl-tu-credit-summary-label  { text-align: right; }.mcl-cell-padding td { padding-top: 2px; padding-bottom: 2px; padding-left: 2px; padding-right: 2px; }.mcl-cell-no-padding td { padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; }.mcl-report-body  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.mcl-report-label  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.mcl-hyperlink  { color: blue; text-decoration: underline; }.mcl-hyperlink-help  { color: blue; text-decoration: none; }.mcl-report-title  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.mcl-MLA-disclaimer_dagger  { font-size: 9pt; color: black; font-family: 'Arial Narrow', Arial; font-weight: bold; }.mcl-MLA-disclaimer  { font-size: 8pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-experian-attribute-summary-cell  { font-size: 7pt; }.mcl-checkbox  { width: 14px; height: 14px; outline-color: Black; }

				/*]]&gt;*/

			</style>

								<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

								<title>Risk Based Pricing Disclosure</title>

								<style type="text/css">

				/*&lt;![CDATA[*/

				.riskbased-table-format  { border-width: 0; width: 100%; border-collapse: collapse; }.riskbased-table-ie-compatibility  { border-collapse: collapse; margin-left: auto; margin-right: auto; }@media print{.riskbased-address  { font-size: 8pt; }}@media print{.riskbased-body  { font-size: 7pt; }}@media print{.riskbased-table  { font-size: 7pt; }}@media print{.riskbased-table td { font-size: 7pt; }}@media print{.riskbased-section-content-space  { line-height: 7pt; height: 10px; }}@media print{.riskbased-reportsection  { line-height: 8pt; }}.riskbased-address  { font-size: 9pt; }.riskbased-body  { font-size: 8pt; }.riskbased-table  { font-size: 8pt; }.riskbased-section-content-space  { line-height: 9pt; height: 16px; }.riskbased-reportsection  { line-height: 9pt; }.riskbased-table  { width: 100%; }.riskbased-cell td { vertical-align: top; }.riskbased-cell-border td { border-top-style: solid; border-top-color: Gray; border-top-width: 1px; border-right-style: solid; border-right-color: Gray; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: Gray; border-bottom-width: 1px; border-left-style: solid; border-left-color: Gray; border-left-width: 1px; }.riskbased-cell-border block { border-top-style: none; border-top-width: 0; border-right-style: none; border-right-width: 0; border-bottom-style: none; border-bottom-width: 0; border-left-style: none; border-left-width: 0; padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; }.riskbased-cell-border ul { border-top-style: none; border-top-width: 0; border-right-style: none; border-right-width: 0; border-bottom-style: none; border-bottom-width: 0; border-left-style: none; border-left-width: 0; }.riskbased-cell-padding td { padding-top: 2px; padding-bottom: 2px; padding-left: 3px; padding-right: 3px; }.riskbased-column-label  { background-color: silver; font-weight: bold; }.riskbased-reportsection  { font-weight: bold; color: white; font-family: Arial; background-color: darkcyan; }.riskbased-section-space  { line-height: 5pt; height: 8px; }.riskbased-list  { list-style-position: inside; margin: 0; padding-top: 0; padding-bottom: 0; padding-left: 3em; padding-right: 0; }.reportbody  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.reportlabel  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.reporthyperlink  { color: blue; text-decoration: underline; }.reportsection  { font-weight: bold; font-size: 9pt; color: white; font-family: Arial; background-color: darkcyan; }.reporttitle  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.invoiceheader  { font-weight: normal; font-size: 12pt; color: black; font-family: 'Courier New', Arial; }.reportheaderlabel  { font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; background-color: lightblue; }.reportbody2  { font-size: 9pt; color: black; background-color: seashell; }.footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.reportTableBorder  { border-collapse: separate; border-right-style: groove; border-right-width: 1px; border-right-color: DarkGray; border-bottom-style: groove; border-bottom-width: 1px; border-bottom-color: DarkGray; }.reportTableBorder th, .reportTableBorder td { border-style: groove; border-width: 1px; border-color: white; border-right-color: white; border-bottom-color: white; }.reportTableBorder block { border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; }.reportTableNoBorder  { border-width: 0px; }.reportTableNoBorder th, .reportTableNoBorder td { border-width: 0px; }.mcl-report-section  { background-color: darkcyan; font-weight: bold; font-size: 9pt; color: white; font-family: Arial; }.mcl-report-header-label  { background-color: lightblue; font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; }.mcl-report-body2  { background-color: seashell; font-size: 9pt; color: black; }.mcl-tradeline-header td { border-collapse: collapse; border-top-style: solid; border-top-color: darkcyan; border-top-width: 1px; border-right-style: solid; border-right-color: darkcyan; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: darkcyan; border-bottom-width: 1px; border-left-style: solid; border-left-color: darkcyan; border-left-width: 1px; }.mcl-tu-credit-summary-label  { text-align: right; }.mcl-cell-padding td { padding-top: 2px; padding-bottom: 2px; padding-left: 2px; padding-right: 2px; }.mcl-cell-no-padding td { padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; }.mcl-report-body  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.mcl-report-label  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.mcl-hyperlink  { color: blue; text-decoration: underline; }.mcl-hyperlink-help  { color: blue; text-decoration: none; }.mcl-report-title  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.mcl-MLA-disclaimer_dagger  { font-size: 9pt; color: black; font-family: 'Arial Narrow', Arial; font-weight: bold; }.mcl-MLA-disclaimer  { font-size: 8pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-experian-attribute-summary-cell  { font-size: 7pt; }.mcl-checkbox  { width: 14px; height: 14px; outline-color: Black; }

				/*]]&gt;*/

			</style>

							</head>

							<body class="reportbody">

								<span>

									<span>

										<table cellspacing="0" class="riskbased-body riskbased-table-format riskbased-table-ie-compatibility">

											<colgroup>

												<col style="width:50%;"></col>

												<col style="width:50%;"></col>

											</colgroup>

											<tr style="font-weight:bold;">

												<td class="riskbased-address">CREDIT PLUS of SALISBURY

													<span style="font-weight:normal;">

														<br />31550 WINTERPLACE PKWY

														<br />SALISBURY, MD 21804

														<br />8002583488

													</span>

												</td>

												<td style="text-align:right;vertical-align:top;">

								REPORT #: 37574529</td>

											</tr>

										</table>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-body riskbased-address" style="padding-left:6em;">

						RETURN SERVICE REQUESTED



											<br />

											<br />TIM  TESTCASE

											<br />4053 ALADDIN DR

											<br />HUNTINGTON BEACH, CA  92649

										</div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-section-content-space"></div>

										<div class="riskbased-body" style="text-align:center;font-weight:bold;">Your Credit Score and the Price You Pay for Credit</div>

									</span>

									<span>

										<div class="riskbased-section-content-space"></div>

										<table cellspacing="0" class="riskbased-body riskbased-table riskbased-cell riskbased-cell-padding riskbased-cell-border riskbased-table-ie-compatibility">

											<colgroup>

												<col style="width:17%;"></col>

												<col style="width:48%;"></col>

												<col style="width:35%;"></col>

											</colgroup>

											<thead>

												<tr>

													<td colspan="3" class="riskbased-reportsection">Your Credit Score</td>

												</tr>

											</thead>

											<tbody>

												<tr>

													<td class="riskbased-column-label">

									Your credit score

								</td>

													<td style="border-top-style:none;border-right-style:none;border-right-width:0;">

														<span style="font-weight:bold;">345</span>

														<br />Source: EXPERIAN

													</td>

													<td style="text-align:right;border-left-style:none;border-left-width:0;">Model: EXPERIAN/FAIR, ISAAC

														<br />Date: 11/18/04

													</td>

												</tr>

												<tr>

													<td colspan="3" style="border-top-style:none;border-top-width:0;border-right-style:none;border-right-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;">

														<div class="riskbased-section-space"></div>

													</td>

												</tr>

												<tr>

													<td colspan="3" class="riskbased-reportsection">Understanding Your Credit Score</td>

												</tr>

												<tr>

													<td class="riskbased-column-label">

								What you should know about credit scores

							</td>

													<td colspan="2">

								Your credit score is a number that reflects the information in your credit report.



														<br />

														<br />

								Your credit report is a record of your credit history.

								It includes information about whether you pay your bills on time and how much you owe to creditors.



														<br />

														<br />

								Your credit score can change, depending on how your credit history changes.



													</td>

												</tr>

												<tr>

													<td class="riskbased-column-label">

								How we use your credit score

							</td>

													<td colspan="2">

								Your credit score can affect whether you can get a loan and how much you will have to pay for that loan.

							</td>

												</tr>

												<tr>

													<td class="riskbased-column-label">

								The range of scores

							</td>

													<td colspan="2">Scores range from a low of 360 to a high of 840.

														<br />

														<br />

								Generally, the higher your score, the more likely you are to be offered better credit terms.



													</td>

												</tr>

												<tr>

													<td class="riskbased-column-label">

								How your score compares to the scores of other consumers

							</td>

													<td colspan="2">

											Score distributions are not available for this risk model.

										</td>

												</tr>

												<tr>

													<td class="riskbased-column-label">

									Key

														<span style="text-decoration:underline;">factors</span> that adversely affected your credit score



													</td>

													<td colspan="2">

														<ul class="riskbased-list">

															<li>LEVEL OF DELINQUENCY ON ACCOUNTS</li>

															<li>TIME SINCE DEROGATORY PUBLIC RECORD OR COLLECTION IS TOO SHORT</li>

															<li>NUMBER OF ACCOUNTS WITH DELINQUENCY</li>

															<li>PROPORTION OF BALANCE TO HIGH CREDIT ON BANK REVOLVING OR ALL REVOLVING ACCOUNTS</li>

														</ul>

													</td>

												</tr>

											</tbody>

										</table>

									</span>

									<span>

										<div class="riskbased-section-space"></div>

										<table cellspacing="0" class="riskbased-body riskbased-table riskbased-cell riskbased-cell-padding riskbased-cell-border riskbased-table-ie-compatibility">

											<colgroup>

												<col style="width:17%;"></col>

												<col style="width:10%;"></col>

												<col style="width:73%;"></col>

											</colgroup>

											<thead>

												<tr>

													<td colspan="3" class="riskbased-reportsection">Checking Your Credit Report</td>

												</tr>

											</thead>

											<tbody>

												<tr>

													<td rowspan="2" class="riskbased-column-label">

										What if there are mistakes in your credit report?

									</td>

													<td colspan="2" style="border-bottom-style:none;border-bottom-width:0;">

										You have a right to dispute any inaccurate information in your credit report.

										If you find mistakes on your credit report, contact the consumer reporting agency.



														<br />

														<br />

										It is a good idea to check your credit report to make sure the information it contains is accurate.



														<br />

														<br />

													</td>

												</tr>

												<tr>

													<td colspan="2" style="border-top-width:0;">

														<table cellspacing="0">

															<tr>

																<td style="padding-left:0;padding-right:30px;border-top-width:0;border-right-width:0;border-bottom-width:0;border-left-width:0;">EXPERIAN

																	<br />PO BOX 4500

																	<br />ALLEN, TX 75013

																	<br />888-397-3742

																</td>

																<td style="padding-left:0;border-top-width:0;border-right-width:0;border-bottom-width:0;border-left-width:0;"></td>

															</tr>

														</table>

													</td>

												</tr>

												<tr>

													<td rowspan="4" class="riskbased-column-label">

										How can you obtain a copy of your credit report?

									</td>

													<td colspan="2" style="border-top-style:none;border-top-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-bottom:0;">

										Under federal law, you have the right to obtain a free copy of your credit report from each of the

										nationwide consumer reporting agencies once a year.



														<br />

														<br />

										To order your free annual credit report:



														<br />

														<br />

													</td>

												</tr>

												<tr>

													<td style="font-style:italic;border-top-style:none;border-top-width:0;border-right-style:none;border-right-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-top:0;">

										By telephone:

									</td>

													<td style="border-top-style:none;border-top-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-top:0;">

										Call toll-free: 1-877-322-8228

									</td>

												</tr>

												<tr>

													<td style="font-style:italic;border-top-style:none;border-top-width:0;border-right-style:none;border-right-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-top:0;">

										On the web:

									</td>

													<td style="border-top-style:none;border-top-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-top:0;">

										Visit

														<span style="text-decoration:underline;">www.annualcreditreport.com</span>

													</td>

												</tr>

												<tr>

													<td style="font-style:italic;border-top-style:none;border-top-width:0;border-right-style:none;border-right-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-top:0;">

										By mail:

									</td>

													<td style="border-top-style:none;border-top-width:0;border-bottom-style:none;border-bottom-width:0;border-left-style:none;border-left-width:0;padding-top:0;">

										Mail your completed Annual Credit Report Request Form

										(which you can obtain from the Federal Trade Commission's web site at



														<span style="text-decoration:underline;">http://www.ftc.gov/bcp/conline/include/requestformfinal.pdf</span>)

										to:



														<br />

														<br />

										Annual Credit Report Request Service

														<br />

										P.O. Box 105281

														<br />

										Atlanta, GA 30348-5281



													</td>

												</tr>

												<tr>

													<td class="riskbased-column-label">

									How can you get more information?

								</td>

													<td colspan="2">For more information about credit reports and your rights under Federal law, visit the Consumer Financial Protection Bureau's web site at www.consumerfinance.gov/learnmore.</td>

												</tr>

											</tbody>

										</table>

									</span>

									<p style="background-color:white;color:white;font:1px monospace;margin:0;padding:0;page-break-before:always;height:0;">_</p>

								</span>

								<span>

									<span>

										<div class="riskbased-body">

											<br />

											<div style="font-weight:bold;text-align:center;">

								Notice to the Home Loan Applicant

							</div>

											<br />

							In connection with your application for a home loan, the lender must disclose to you the score that a

							consumer reporting agency distributed to users and the lender used in connection with your home loan,

							and the key factors affecting your credit scores.



											<br />

											<br />

							The credit score is a computer generated summary calculated at the time of the request and based on

							information that a consumer reporting agency or lender has on file.

							The scores are based on data about your credit history and payment patterns.

							Credit scores are important because they are used to assist the lender in determining whether you will obtain a loan.

							They may also be used to determine what interest rate you may be offered on the mortgage.

							Credit scores can change over time, depending on your conduct, how your credit history and payment patterns change,

							and how credit scoring technologies change.



											<br />

											<br />

							Because the score is based on information in your credit history, it is very important that you review the

							credit-related information that is being furnished to make sure it is accurate.

							Credit records may vary from one company to another.



											<br />

											<br />

							If you have questions about your credit score or the credit information that is furnished to you,

							contact the consumer reporting agency at the address and telephone number provided with this notice,

							or contact the lender, if the lender developed or generated the credit score.

							The consumer reporting agency plays no part in the decision to take any action on the loan application

							and is unable to provide you with specific reasons for the decision on a loan application.



											<br />

											<br />

											<br />

							If you have questions concerning the terms of the loan, contact the lender.



										</div>

										<div class="riskbased-section-content-space"></div>

									</span>

								</span>

							</body>

						</html>

						<!-- MCL_END_REPORT:RISK_BASED_PRICING_DISCLOSURE_MORTGAGE_MID -->

						<p style='page-break-after:always'>&nbsp;</p>

						<!-- MCL_BEGIN_REPORT:NOTICE_PC_SC_COPIES -->

						<html>

							<head>

								<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

								<title>Score Disclosure</title>

								<style type="text/css">

				/*&lt;![CDATA[*/

				.notice-table-ie-compatibility  { border-collapse: collapse; margin-left: auto; margin-right: auto; }.notice-report-title  { font-size: 12pt; color: Black; font-family: Arial; font-weight: bold; }.notice-section-content-space  { line-height: 7pt; height: 12px; }.notice-section-content-space td { padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; }.notice-cell-no-border td { border-top-style: none; border-top-width: 0; border-right-style: none; border-right-width: 0; border-bottom-style: none; border-bottom-width: 0; border-left-style: none; border-left-width: 0; }.mcl-table-format  { border-width: 0; width: 100%; border-collapse: collapse; }.reportbody  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.reportlabel  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.reporthyperlink  { color: blue; text-decoration: underline; }.reportsection  { font-weight: bold; font-size: 9pt; color: white; font-family: Arial; background-color: darkcyan; }.reporttitle  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.invoiceheader  { font-weight: normal; font-size: 12pt; color: black; font-family: 'Courier New', Arial; }.reportheaderlabel  { font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; background-color: lightblue; }.reportbody2  { font-size: 9pt; color: black; background-color: seashell; }.footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.reportTableBorder  { border-collapse: separate; border-right-style: groove; border-right-width: 1px; border-right-color: DarkGray; border-bottom-style: groove; border-bottom-width: 1px; border-bottom-color: DarkGray; }.reportTableBorder th, .reportTableBorder td { border-style: groove; border-width: 1px; border-color: white; border-right-color: white; border-bottom-color: white; }.reportTableBorder block { border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; }.reportTableNoBorder  { border-width: 0px; }.reportTableNoBorder th, .reportTableNoBorder td { border-width: 0px; }.mcl-report-section  { background-color: darkcyan; font-weight: bold; font-size: 9pt; color: white; font-family: Arial; }.mcl-report-header-label  { background-color: lightblue; font-weight: bold; font-size: 7pt; color: black; line-height: 7pt; font-family: Arial; }.mcl-report-body2  { background-color: seashell; font-size: 9pt; color: black; }.mcl-tradeline-header td { border-collapse: collapse; border-top-style: solid; border-top-color: darkcyan; border-top-width: 1px; border-right-style: solid; border-right-color: darkcyan; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: darkcyan; border-bottom-width: 1px; border-left-style: solid; border-left-color: darkcyan; border-left-width: 1px; }.mcl-tu-credit-summary-label  { text-align: right; }.mcl-cell-padding td { padding-top: 2px; padding-bottom: 2px; padding-left: 2px; padding-right: 2px; }.mcl-cell-no-padding td { padding-top: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; }.mcl-report-body  { font-size: 9pt; color: black; font-family: Arial, 'Arial Narrow'; }.mcl-report-label  { font-weight: bold; font-size: 8pt; color: black; font-family: Arial; }.mcl-hyperlink  { color: blue; text-decoration: underline; }.mcl-hyperlink-help  { color: blue; text-decoration: none; }.mcl-report-title  { font-size: 12pt; color: black; font-family: Arial; font-weight: bold; }.mcl-MLA-disclaimer_dagger  { font-size: 9pt; color: black; font-family: 'Arial Narrow', Arial; font-weight: bold; }.mcl-MLA-disclaimer  { font-size: 8pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-footer  { font-size: 6pt; color: black; font-family: 'Arial Narrow', Arial; }.mcl-experian-attribute-summary-cell  { font-size: 7pt; }.mcl-checkbox  { width: 14px; height: 14px; outline-color: Black; }

				/*]]&gt;*/

			</style>

							</head>

							<body class="reportbody">

								<span>

									<span>

										<div class="reportbody">CREDIT PLUS of SALISBURY

											<br />31550 WINTERPLACE PKWY

											<br />SALISBURY, MD  21804

											<br />8002583488

										</div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="notice-report-title" style="text-align:center;">NOTICE TO THE HOME LOAN APPLICANT</div>

										<div class="reportbody" style="text-align:center;font-weight:bold;">

					CREDIT SCORE INFORMATION DISCLOSURE

				</div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="reportbody" style="padding-left:6em;">TESTCASE, TIM

											<br />4053 ALADDIN DR

											<br />HUNTINGTON BEACH, CA 92649

										</div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="notice-section-content-space"></div>

										<div class="reportbody">

							In connection with your application for a home loan, the lender must disclose to you the score that a consumer reporting agency distributed to users and the lender used in connection with your home loan, and the key factors affecting your credit scores.



											<br />

											<br />

							The credit score is a computer generated summary calculated at the time of the request and based on information that a consumer reporting agency or lender has on file. The scores are based on data about your credit history and payment patterns. Credit scores are important because they are used to assist the lender in determining whether you will obtain a loan. They may also be used to determine what interest rate you may be offered on the mortgage. Credit scores can change over time, depending on your conduct, how your credit history and payment patterns change, and how credit scoring technologies change.



											<br />

											<br />

					Because the score is based on information in your credit history, it is very important that you review the credit-related information that is being furnished to make sure it is accurate. Credit records may vary from one company to another.



											<br />

											<br />

					If you have questions about your credit score or the credit information that is furnished to you, contact the consumer reporting agency at the address and telephone number provided with this notice, or contact the lender, if the lender developed or generated the credit score. The consumer reporting agency plays no part in the decision to take any action on the loan application and is unable to provide you with specific reasons for the decision on a loan application.



											<br />

											<br />

					If you have questions regarding the terms of the loan, contact the lender.



										</div>

									</span>

									<span>

										<div class="reportbody" style="text-align:center;">Your credit scores were provided by the following credit reporting agency:</div>

										<div class="notice-section-content-space"></div>

										<table cellspacing="0" class="reportbody notice-cell-no-border notice-table-ie-compatibility" align="center" style="border-width:0;width:75%;text-align:left;">

											<colgroup>

												<col style="width:25%;"></col>

												<col style="width:25%;"></col>

												<col style="width:25%;"></col>

											</colgroup>

											<tr style="vertical-align:top;">

												<td>EXPERIAN</td>

												<td></td>

												<td></td>

											</tr>

											<tr style="vertical-align:top;">

												<td>PO BOX 4500</td>

												<td></td>

												<td></td>

											</tr>

											<tr style="vertical-align:top;">

												<td>ALLEN, TX 75013</td>

												<td></td>

												<td></td>

											</tr>

											<tr style="vertical-align:top;">

												<td>888-397-3742</td>

												<td></td>

												<td></td>

											</tr>

											<tr style="vertical-align:top;">

												<td>www.experian.com/reportaccess</td>

												<td></td>

												<td></td>

											</tr>

										</table>

										<div class="notice-section-content-space"></div>

										<div class="reportbody">The following information about your credit scores was created on 2/16/2017.

					</div>

										<div class="notice-section-content-space"></div>

									</span>

									<span>

										<table style="width: 100%; border-collapse: collapse;" cellspacing="0" cellpadding="0">

											<thead>

												<tr>

													<td style="border-collapse: separate;">

														<div class="mcl-report-section" style="text-align:center;">SCORE MODELS</div>

													</td>

												</tr>

											</thead>

											<tbody>

												<tr>

													<td style="border-collapse: separate;">

														<div class="mcl-report-body">EXPERIAN/FAIR, ISAAC -

				TIM TESTCASE - *****7766

															<br />SCORE:



															<span style="font-weight:bold;">345</span>

															<br />02 - LEVEL OF DELINQUENCY ON ACCOUNTS

															<br />20 - TIME SINCE DEROGATORY PUBLIC RECORD OR COLLECTION IS TOO SHORT

															<br />18 - NUMBER OF ACCOUNTS WITH DELINQUENCY

															<br />10 - PROPORTION OF BALANCE TO HIGH CREDIT ON BANK REVOLVING OR ALL REVOLVING ACCOUNTS

															<br />

														</div>

														<hr></hr>

													</td>

												</tr>

											</tbody>

										</table>

									</span>

								</span>

							</body>

						</html>

						<!-- MCL_END_REPORT:NOTICE_PC_SC_COPIES -->

						<!-- MCL_BEGIN_REPORT:OTHER -->

						<!-- MCL_END_REPORT:OTHER -->

						<p style='page-break-after:always'>&nbsp;</p>

						<!-- MCL_BEGIN_REPORT:ID_RISK_REVIEW -->

						<html>

							<head>

								<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

								<style type="text/css">

				/*&lt;![CDATA[*/

				.IDRiskLabel  { font-family: arial; font-weight: bold; font-size: 10pt; }.IDRiskAlert  { color: red; font-size: 8pt; padding-top: 3px; padding-left: 3px; padding-bottom: 3px; padding-right: 3px; }.IDRiskPassed  { color: green; font-size: 10pt; }.IDRiskFailed  { color: red; font-size: 10pt; }.IDRiskDisclaimer  { font-size: 7pt; font-family: arial; }.IDRiskDataLabel  { font-family: arial; font-weight: bold; font-size: 10pt; width: 98%; margin-left: auto; margin-right: auto; align: center; text-align: left; padding-bottom: 5px; }.IDRiskDataContainer  { border-width: 2px; border-style: solid; width: 98%; margin-left: auto; margin-right: auto; align: center; padding-top: 5px; padding-left: 5px; padding-bottom: 5px; padding-right: 5px; }.IDRiskDataContainer td { padding-top: 5px; padding-left: 5px; padding-bottom: 5px; padding-right: 5px; }.IDRiskData  { border-width: 0px; cellspacing: 5; background-color: white; padding-top: 5px; padding-left: 5px; padding-bottom: 5px; padding-right: 5px; width: 100%; }.IDRiskDisclaimer  { font-size: 7pt; }.IDRiskItemText  { font-family: arial; font-size: 10pt; }.IDRisk-header-hr  { font-size: 0; border-top-width: 3px; border-top-style: solid; border-top-color: Black; align: center; }

				/*]]&gt;*/

			</style>

							</head>

							<body class="reportbody">

								<span>

									<span>

										<table cellspacing="0" cellpadding="2" align="center" style="width:98%;margin-left:auto;margin-right:auto;">

											<colgroup>

												<col style="width:50%;"></col>

												<col style="width:50%;"></col>

											</colgroup>

											<tr>

												<td>

													<img src="https://credit.creditplus.com/custom/images/logo.gif" alt="logoPath"></img>

												</td>

												<td style="text-align:right;vertical-align:bottom;font-size:12pt;font-family:arial;font-weight:bold;">ID Plus</td>

											</tr>

										</table>

										<br />

										<div class="IDRisk-header-hr">

											<br />

										</div>

										<br />

										<table cellspacing="0" cellpadding="4" align="center" style="border-width:0;padding-top:4px;width:98%;margin-left:auto;margin-right:auto;">

											<colgroup>

												<col style="width:48%;"></col>

												<col style="width:4%;"></col>

												<col style="width:48%;"></col>

											</colgroup>

											<tr>

												<td class="IDRiskItemText" style="white-space:nowrap;">

													<span class="IDRiskLabel">Borrower: </span>TIM  TESTCASE

												</td>

												<td></td>

												<td class="IDRiskItemText" style="white-space:nowrap;">

													<span class="IDRiskLabel">Social Security Number: </span>

				XXX-XX-6789

												</td>

											</tr>

											<tr>

												<td align="left" class="IDRiskItemText" style="white-space:nowrap;">

													<span class="IDRiskLabel">Address: </span>4053 ALADDIN DR

												</td>

												<td></td>

												<td align="left" class="IDRiskItemText" style="white-space:nowrap;">

													<span class="IDRiskLabel">Telephone Number: </span>714-235-7114

												</td>

											</tr>

											<tr>

												<td align="left" colspan="3" class="IDRiskItemText" style="white-space:nowrap;">

													<span class="IDRiskLabel">City, State, ZIP: </span>HUNTINGTON BEACH, CA  92649

												</td>

											</tr>

										</table>

										<br />

										<div class="IDRiskDataLabel">

						Summary

					</div>

										<div class="IDRiskDataContainer">

											<table cellspacing="0" cellpadding="8" class="IDRiskData">

												<colgroup>

													<col style="width:4%;"></col>

													<col style="width:46%;"></col>

													<col style="width:4%;"></col>

													<col style="width:46%;"></col>

												</colgroup>

												<tr>

													<td align="right">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			redX.gif" alt="Failed"></img>

													</td>

													<td class="IDRiskLabel">Fraud Alert on File</td>

													<td align="right">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			redX.gif" alt="Failed"></img>

													</td>

													<td class="IDRiskLabel">SSN Alert on File</td>

												</tr>

												<tr>

													<td align="right">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskLabel">

					No Active Duty Alert on File</td>

													<td align="right">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskLabel">

					No Address Alert on File</td>

												</tr>

												<tr>

													<td align="right">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskLabel">

					No Notice of Credit Freeze on File</td>

													<td align="right">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskLabel">

					No Other Alert on File</td>

												</tr>

											</table>

										</div>

										<br />

										<div class="IDRiskDataLabel">

						Social Security Number Alerts

					</div>

										<div class="IDRiskDataContainer">

											<table cellspacing="0" cellpadding="8" class="IDRiskData">

												<colgroup>

													<col style="width:5%;"></col>

													<col style="width:95%;"></col>

												</colgroup>

												<tr>

													<td colspan="2" class="IDRiskLabel">SSN Check:

														<span class="IDRiskFailed">Requires Investigation</span>

													</td>

												</tr>

												<tr>

													<td style="vertical-align:top;text-align:right;">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			redX.gif" alt="Failed"></img>

													</td>

													<td class="IDRiskItemText">Verified SSN with external information sources

														<div class="IDRiskAlert">EF: INQUIRY SSN IS INVALID</div>

													</td>

												</tr>

												<tr>

													<td style="width:40px;vertical-align:top;text-align:right;">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskItemText">Verified SSN is consistent with Personal identifying information</td>

												</tr>

												<tr>

													<td style="width:40px;vertical-align:top;text-align:right;">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskItemText">Verified SSN against Social Security Administration's Master Death Database</td>

												</tr>

											</table>

										</div>

										<br />

										<div class="IDRiskDataLabel">

						Address Alerts

					</div>

										<div class="IDRiskDataContainer">

											<table cellspacing="0" cellpadding="8" class="IDRiskData">

												<colgroup>

													<col style="width:5%;"></col>

													<col style="width:95%;"></col>

												</colgroup>

												<tr>

													<td colspan="2" class="IDRiskLabel">Address Check:

														<span class="IDRiskPassed">PASSED</span>

													</td>

												</tr>

												<tr>

													<td style="width:40px;vertical-align:top;text-align:right;">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskItemText">Verified Address with external information sources</td>

												</tr>

												<tr>

													<td style="width:40px;vertical-align:top;text-align:right;">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskItemText">Verified Address against known fraudulent activity</td>

												</tr>

												<tr>

													<td style="width:40px;vertical-align:top;text-align:right;">

														<img border="0" src="https://credit.creditplus.com/shared/images/&#xD;&#xA;			greenCheck.gif" alt="Passed"></img>

													</td>

													<td class="IDRiskItemText">Verified Address against commonly associated fraudulent activity indicators</td>

												</tr>

											</table>

										</div>

										<br />

										<div class="IDRiskDataLabel">

						Other Alerts

					</div>

										<div class="IDRiskDataContainer">

											<table cellspacing="0" cellpadding="8" class="IDRiskData">

												<colgroup>

													<col style="width:5%;"></col>

													<col style="width:95%;"></col>

												</colgroup>

												<tr>

													<td colspan="2" class="IDRiskLabel">Additional Alerts Check:

														<span class="IDRiskPassed">No Additional Alerts Found</span>

													</td>

												</tr>

												<tr></tr>

											</table>

										</div>

										<br />

										<table cellspacing="0" cellpadding="0" align="center" style="width:98%;margin-left:auto;margin-right:auto;">

											<tr>

												<td class="IDRiskDisclaimer">Disclaimer: The above identified risk messages, alerts, and data are aggregated from creditors, data repositories, and other public sources including Experian Fraud Shield, TransUnion High Risk Fraud Alert, and Equifax Identity Scan.

						Social Security Number verified against multiple databases including Experian File One and the Social Security Administration DeathMaster and Issuance database.

						Reporting bureau makes no representation or warranty as to the accuracy or completeness of this information.

						In accordance with the Fair and Accurate Credit Transactions Act of 2003, the information in this addendum must not be used to determine the credit worthiness nor solely relied upon to establish the identity of a consumer.

						This product is intended for the specific commercial use of the customer and may not be appropriate for direct consumer disclosure.

					</td>

											</tr>

										</table>

									</span>

								</span>

							</body>

						</html>

						<!-- MCL_END_REPORT:ID_RISK_REVIEW -->

]]>

                    </DOCUMENT>

                </EMBEDDED_FILE>

            </CREDIT_RESPONSE>

        </RESPONSE_DATA>

        <STATUS _Name="MLStatus" _Description="READY"/>

    </RESPONSE>

</RESPONSE_GROUP>


XML;
