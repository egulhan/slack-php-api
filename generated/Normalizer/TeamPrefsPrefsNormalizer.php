<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TeamPrefsPrefsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\TeamPrefsPrefs';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\TeamPrefsPrefs;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\TeamPrefsPrefs();
        $data = clone $data;
        if (property_exists($data, 'all_users_can_purchase')) {
            $object->setAllUsersCanPurchase($data->{'all_users_can_purchase'});
            unset($data->{'all_users_can_purchase'});
        }
        if (property_exists($data, 'allow_calls')) {
            $object->setAllowCalls($data->{'allow_calls'});
            unset($data->{'allow_calls'});
        }
        if (property_exists($data, 'allow_calls_interactive_screen_sharing')) {
            $object->setAllowCallsInteractiveScreenSharing($data->{'allow_calls_interactive_screen_sharing'});
            unset($data->{'allow_calls_interactive_screen_sharing'});
        }
        if (property_exists($data, 'allow_message_deletion')) {
            $object->setAllowMessageDeletion($data->{'allow_message_deletion'});
            unset($data->{'allow_message_deletion'});
        }
        if (property_exists($data, 'allow_retention_override')) {
            $object->setAllowRetentionOverride($data->{'allow_retention_override'});
            unset($data->{'allow_retention_override'});
        }
        if (property_exists($data, 'allow_shared_channel_perms_override')) {
            $object->setAllowSharedChannelPermsOverride($data->{'allow_shared_channel_perms_override'});
            unset($data->{'allow_shared_channel_perms_override'});
        }
        if (property_exists($data, 'app_whitelist_enabled')) {
            $object->setAppWhitelistEnabled($data->{'app_whitelist_enabled'});
            unset($data->{'app_whitelist_enabled'});
        }
        if (property_exists($data, 'auth_mode')) {
            $object->setAuthMode($data->{'auth_mode'});
            unset($data->{'auth_mode'});
        }
        if (property_exists($data, 'calling_app_name')) {
            $object->setCallingAppName($data->{'calling_app_name'});
            unset($data->{'calling_app_name'});
        }
        if (property_exists($data, 'can_receive_shared_channels_invites')) {
            $object->setCanReceiveSharedChannelsInvites($data->{'can_receive_shared_channels_invites'});
            unset($data->{'can_receive_shared_channels_invites'});
        }
        if (property_exists($data, 'compliance_export_start')) {
            $object->setComplianceExportStart($data->{'compliance_export_start'});
            unset($data->{'compliance_export_start'});
        }
        if (property_exists($data, 'custom_status_default_emoji')) {
            $object->setCustomStatusDefaultEmoji($data->{'custom_status_default_emoji'});
            unset($data->{'custom_status_default_emoji'});
        }
        if (property_exists($data, 'custom_status_presets')) {
            $values = [];
            foreach ($data->{'custom_status_presets'} as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setCustomStatusPresets($values);
            unset($data->{'custom_status_presets'});
        }
        if (property_exists($data, 'custom_tos')) {
            $object->setCustomTos($data->{'custom_tos'});
            unset($data->{'custom_tos'});
        }
        if (property_exists($data, 'default_channels')) {
            $values_2 = [];
            foreach ($data->{'default_channels'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setDefaultChannels($values_2);
            unset($data->{'default_channels'});
        }
        if (property_exists($data, 'default_rxns')) {
            $values_3 = [];
            foreach ($data->{'default_rxns'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setDefaultRxns($values_3);
            unset($data->{'default_rxns'});
        }
        if (property_exists($data, 'disable_email_ingestion')) {
            $object->setDisableEmailIngestion($data->{'disable_email_ingestion'});
            unset($data->{'disable_email_ingestion'});
        }
        if (property_exists($data, 'disable_file_deleting')) {
            $object->setDisableFileDeleting($data->{'disable_file_deleting'});
            unset($data->{'disable_file_deleting'});
        }
        if (property_exists($data, 'disable_file_editing')) {
            $object->setDisableFileEditing($data->{'disable_file_editing'});
            unset($data->{'disable_file_editing'});
        }
        if (property_exists($data, 'disable_file_uploads')) {
            $object->setDisableFileUploads($data->{'disable_file_uploads'});
            unset($data->{'disable_file_uploads'});
        }
        if (property_exists($data, 'disallow_public_file_urls')) {
            $object->setDisallowPublicFileUrls($data->{'disallow_public_file_urls'});
            unset($data->{'disallow_public_file_urls'});
        }
        if (property_exists($data, 'discoverable')) {
            $object->setDiscoverable($data->{'discoverable'});
            unset($data->{'discoverable'});
        }
        if (property_exists($data, 'display_email_addresses')) {
            $object->setDisplayEmailAddresses($data->{'display_email_addresses'});
            unset($data->{'display_email_addresses'});
        }
        if (property_exists($data, 'display_real_names')) {
            $object->setDisplayRealNames($data->{'display_real_names'});
            unset($data->{'display_real_names'});
        }
        if (property_exists($data, 'dm_retention_duration')) {
            $object->setDmRetentionDuration($data->{'dm_retention_duration'});
            unset($data->{'dm_retention_duration'});
        }
        if (property_exists($data, 'dm_retention_type')) {
            $object->setDmRetentionType($data->{'dm_retention_type'});
            unset($data->{'dm_retention_type'});
        }
        if (property_exists($data, 'dnd_enabled')) {
            $object->setDndEnabled($data->{'dnd_enabled'});
            unset($data->{'dnd_enabled'});
        }
        if (property_exists($data, 'dnd_end_hour')) {
            $object->setDndEndHour($data->{'dnd_end_hour'});
            unset($data->{'dnd_end_hour'});
        }
        if (property_exists($data, 'dnd_start_hour')) {
            $object->setDndStartHour($data->{'dnd_start_hour'});
            unset($data->{'dnd_start_hour'});
        }
        if (property_exists($data, 'enable_shared_channels')) {
            $object->setEnableSharedChannels($data->{'enable_shared_channels'});
            unset($data->{'enable_shared_channels'});
        }
        if (property_exists($data, 'enterprise_default_channels')) {
            $values_4 = [];
            foreach ($data->{'enterprise_default_channels'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setEnterpriseDefaultChannels($values_4);
            unset($data->{'enterprise_default_channels'});
        }
        if (property_exists($data, 'enterprise_mandatory_channels')) {
            $values_5 = [];
            foreach ($data->{'enterprise_mandatory_channels'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setEnterpriseMandatoryChannels($values_5);
            unset($data->{'enterprise_mandatory_channels'});
        }
        if (property_exists($data, 'enterprise_mdm_date_enabled')) {
            $object->setEnterpriseMdmDateEnabled($data->{'enterprise_mdm_date_enabled'});
            unset($data->{'enterprise_mdm_date_enabled'});
        }
        if (property_exists($data, 'enterprise_mdm_level')) {
            $object->setEnterpriseMdmLevel($data->{'enterprise_mdm_level'});
            unset($data->{'enterprise_mdm_level'});
        }
        if (property_exists($data, 'enterprise_team_creation_request')) {
            $object->setEnterpriseTeamCreationRequest($this->denormalizer->denormalize($data->{'enterprise_team_creation_request'}, 'JoliCode\\Slack\\Api\\Model\\TeamPrefsPrefsEnterpriseTeamCreationRequest', 'json', $context));
            unset($data->{'enterprise_team_creation_request'});
        }
        if (property_exists($data, 'file_limit_whitelisted')) {
            $object->setFileLimitWhitelisted($data->{'file_limit_whitelisted'});
            unset($data->{'file_limit_whitelisted'});
        }
        if (property_exists($data, 'file_retention_duration')) {
            $object->setFileRetentionDuration($data->{'file_retention_duration'});
            unset($data->{'file_retention_duration'});
        }
        if (property_exists($data, 'file_retention_type')) {
            $object->setFileRetentionType($data->{'file_retention_type'});
            unset($data->{'file_retention_type'});
        }
        if (property_exists($data, 'gdrive_enabled_team')) {
            $object->setGdriveEnabledTeam($data->{'gdrive_enabled_team'});
            unset($data->{'gdrive_enabled_team'});
        }
        if (property_exists($data, 'group_retention_duration')) {
            $object->setGroupRetentionDuration($data->{'group_retention_duration'});
            unset($data->{'group_retention_duration'});
        }
        if (property_exists($data, 'group_retention_type')) {
            $object->setGroupRetentionType($data->{'group_retention_type'});
            unset($data->{'group_retention_type'});
        }
        if (property_exists($data, 'hide_referers')) {
            $object->setHideReferers($data->{'hide_referers'});
            unset($data->{'hide_referers'});
        }
        if (property_exists($data, 'invites_limit')) {
            $object->setInvitesLimit($data->{'invites_limit'});
            unset($data->{'invites_limit'});
        }
        if (property_exists($data, 'invites_only_admins')) {
            $object->setInvitesOnlyAdmins($data->{'invites_only_admins'});
            unset($data->{'invites_only_admins'});
        }
        if (property_exists($data, 'locale')) {
            $object->setLocale($data->{'locale'});
            unset($data->{'locale'});
        }
        if (property_exists($data, 'loud_channel_mentions_limit')) {
            $object->setLoudChannelMentionsLimit($data->{'loud_channel_mentions_limit'});
            unset($data->{'loud_channel_mentions_limit'});
        }
        if (property_exists($data, 'msg_edit_window_mins')) {
            $object->setMsgEditWindowMins($data->{'msg_edit_window_mins'});
            unset($data->{'msg_edit_window_mins'});
        }
        if (property_exists($data, 'retention_duration')) {
            $object->setRetentionDuration($data->{'retention_duration'});
            unset($data->{'retention_duration'});
        }
        if (property_exists($data, 'retention_type')) {
            $object->setRetentionType($data->{'retention_type'});
            unset($data->{'retention_type'});
        }
        if (property_exists($data, 'show_join_leave')) {
            $object->setShowJoinLeave($data->{'show_join_leave'});
            unset($data->{'show_join_leave'});
        }
        if (property_exists($data, 'uses_customized_custom_status_presets')) {
            $object->setUsesCustomizedCustomStatusPresets($data->{'uses_customized_custom_status_presets'});
            unset($data->{'uses_customized_custom_status_presets'});
        }
        if (property_exists($data, 'warn_before_at_channel')) {
            $object->setWarnBeforeAtChannel($data->{'warn_before_at_channel'});
            unset($data->{'warn_before_at_channel'});
        }
        if (property_exists($data, 'who_can_archive_channels')) {
            $object->setWhoCanArchiveChannels($data->{'who_can_archive_channels'});
            unset($data->{'who_can_archive_channels'});
        }
        if (property_exists($data, 'who_can_at_channel')) {
            $object->setWhoCanAtChannel($data->{'who_can_at_channel'});
            unset($data->{'who_can_at_channel'});
        }
        if (property_exists($data, 'who_can_at_everyone')) {
            $object->setWhoCanAtEveryone($data->{'who_can_at_everyone'});
            unset($data->{'who_can_at_everyone'});
        }
        if (property_exists($data, 'who_can_change_team_profile')) {
            $object->setWhoCanChangeTeamProfile($data->{'who_can_change_team_profile'});
            unset($data->{'who_can_change_team_profile'});
        }
        if (property_exists($data, 'who_can_create_channels')) {
            $object->setWhoCanCreateChannels($data->{'who_can_create_channels'});
            unset($data->{'who_can_create_channels'});
        }
        if (property_exists($data, 'who_can_create_delete_user_groups')) {
            $object->setWhoCanCreateDeleteUserGroups($data->{'who_can_create_delete_user_groups'});
            unset($data->{'who_can_create_delete_user_groups'});
        }
        if (property_exists($data, 'who_can_create_groups')) {
            $object->setWhoCanCreateGroups($data->{'who_can_create_groups'});
            unset($data->{'who_can_create_groups'});
        }
        if (property_exists($data, 'who_can_create_shared_channels')) {
            $object->setWhoCanCreateSharedChannels($data->{'who_can_create_shared_channels'});
            unset($data->{'who_can_create_shared_channels'});
        }
        if (property_exists($data, 'who_can_edit_user_groups')) {
            $object->setWhoCanEditUserGroups($data->{'who_can_edit_user_groups'});
            unset($data->{'who_can_edit_user_groups'});
        }
        if (property_exists($data, 'who_can_kick_channels')) {
            $object->setWhoCanKickChannels($data->{'who_can_kick_channels'});
            unset($data->{'who_can_kick_channels'});
        }
        if (property_exists($data, 'who_can_kick_groups')) {
            $object->setWhoCanKickGroups($data->{'who_can_kick_groups'});
            unset($data->{'who_can_kick_groups'});
        }
        if (property_exists($data, 'who_can_manage_guests')) {
            $object->setWhoCanManageGuests($this->denormalizer->denormalize($data->{'who_can_manage_guests'}, 'JoliCode\\Slack\\Api\\Model\\TeamPrefsPrefsWhoCanManageGuests', 'json', $context));
            unset($data->{'who_can_manage_guests'});
        }
        if (property_exists($data, 'who_can_manage_integrations')) {
            $object->setWhoCanManageIntegrations($this->denormalizer->denormalize($data->{'who_can_manage_integrations'}, 'JoliCode\\Slack\\Api\\Model\\TeamPrefsPrefsWhoCanManageIntegrations', 'json', $context));
            unset($data->{'who_can_manage_integrations'});
        }
        if (property_exists($data, 'who_can_manage_shared_channels')) {
            $object->setWhoCanManageSharedChannels($this->denormalizer->denormalize($data->{'who_can_manage_shared_channels'}, 'JoliCode\\Slack\\Api\\Model\\TeamPrefsPrefsWhoCanManageSharedChannels', 'json', $context));
            unset($data->{'who_can_manage_shared_channels'});
        }
        if (property_exists($data, 'who_can_post_general')) {
            $object->setWhoCanPostGeneral($data->{'who_can_post_general'});
            unset($data->{'who_can_post_general'});
        }
        if (property_exists($data, 'who_can_post_in_shared_channels')) {
            $object->setWhoCanPostInSharedChannels($this->denormalizer->denormalize($data->{'who_can_post_in_shared_channels'}, 'JoliCode\\Slack\\Api\\Model\\TeamPrefsPrefsWhoCanPostInSharedChannels', 'json', $context));
            unset($data->{'who_can_post_in_shared_channels'});
        }
        if (property_exists($data, 'who_has_team_visibility')) {
            $object->setWhoHasTeamVisibility($data->{'who_has_team_visibility'});
            unset($data->{'who_has_team_visibility'});
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_6;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllUsersCanPurchase()) {
            $data->{'all_users_can_purchase'} = $object->getAllUsersCanPurchase();
        }
        if (null !== $object->getAllowCalls()) {
            $data->{'allow_calls'} = $object->getAllowCalls();
        }
        if (null !== $object->getAllowCallsInteractiveScreenSharing()) {
            $data->{'allow_calls_interactive_screen_sharing'} = $object->getAllowCallsInteractiveScreenSharing();
        }
        if (null !== $object->getAllowMessageDeletion()) {
            $data->{'allow_message_deletion'} = $object->getAllowMessageDeletion();
        }
        if (null !== $object->getAllowRetentionOverride()) {
            $data->{'allow_retention_override'} = $object->getAllowRetentionOverride();
        }
        if (null !== $object->getAllowSharedChannelPermsOverride()) {
            $data->{'allow_shared_channel_perms_override'} = $object->getAllowSharedChannelPermsOverride();
        }
        if (null !== $object->getAppWhitelistEnabled()) {
            $data->{'app_whitelist_enabled'} = $object->getAppWhitelistEnabled();
        }
        if (null !== $object->getAuthMode()) {
            $data->{'auth_mode'} = $object->getAuthMode();
        }
        if (null !== $object->getCallingAppName()) {
            $data->{'calling_app_name'} = $object->getCallingAppName();
        }
        if (null !== $object->getCanReceiveSharedChannelsInvites()) {
            $data->{'can_receive_shared_channels_invites'} = $object->getCanReceiveSharedChannelsInvites();
        }
        if (null !== $object->getComplianceExportStart()) {
            $data->{'compliance_export_start'} = $object->getComplianceExportStart();
        }
        if (null !== $object->getCustomStatusDefaultEmoji()) {
            $data->{'custom_status_default_emoji'} = $object->getCustomStatusDefaultEmoji();
        }
        if (null !== $object->getCustomStatusPresets()) {
            $values = [];
            foreach ($object->getCustomStatusPresets() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data->{'custom_status_presets'} = $values;
        }
        if (null !== $object->getCustomTos()) {
            $data->{'custom_tos'} = $object->getCustomTos();
        }
        if (null !== $object->getDefaultChannels()) {
            $values_2 = [];
            foreach ($object->getDefaultChannels() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'default_channels'} = $values_2;
        }
        if (null !== $object->getDefaultRxns()) {
            $values_3 = [];
            foreach ($object->getDefaultRxns() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'default_rxns'} = $values_3;
        }
        if (null !== $object->getDisableEmailIngestion()) {
            $data->{'disable_email_ingestion'} = $object->getDisableEmailIngestion();
        }
        if (null !== $object->getDisableFileDeleting()) {
            $data->{'disable_file_deleting'} = $object->getDisableFileDeleting();
        }
        if (null !== $object->getDisableFileEditing()) {
            $data->{'disable_file_editing'} = $object->getDisableFileEditing();
        }
        if (null !== $object->getDisableFileUploads()) {
            $data->{'disable_file_uploads'} = $object->getDisableFileUploads();
        }
        if (null !== $object->getDisallowPublicFileUrls()) {
            $data->{'disallow_public_file_urls'} = $object->getDisallowPublicFileUrls();
        }
        if (null !== $object->getDiscoverable()) {
            $data->{'discoverable'} = $object->getDiscoverable();
        }
        if (null !== $object->getDisplayEmailAddresses()) {
            $data->{'display_email_addresses'} = $object->getDisplayEmailAddresses();
        }
        if (null !== $object->getDisplayRealNames()) {
            $data->{'display_real_names'} = $object->getDisplayRealNames();
        }
        if (null !== $object->getDmRetentionDuration()) {
            $data->{'dm_retention_duration'} = $object->getDmRetentionDuration();
        }
        if (null !== $object->getDmRetentionType()) {
            $data->{'dm_retention_type'} = $object->getDmRetentionType();
        }
        if (null !== $object->getDndEnabled()) {
            $data->{'dnd_enabled'} = $object->getDndEnabled();
        }
        if (null !== $object->getDndEndHour()) {
            $data->{'dnd_end_hour'} = $object->getDndEndHour();
        }
        if (null !== $object->getDndStartHour()) {
            $data->{'dnd_start_hour'} = $object->getDndStartHour();
        }
        if (null !== $object->getEnableSharedChannels()) {
            $data->{'enable_shared_channels'} = $object->getEnableSharedChannels();
        }
        if (null !== $object->getEnterpriseDefaultChannels()) {
            $values_4 = [];
            foreach ($object->getEnterpriseDefaultChannels() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'enterprise_default_channels'} = $values_4;
        }
        if (null !== $object->getEnterpriseMandatoryChannels()) {
            $values_5 = [];
            foreach ($object->getEnterpriseMandatoryChannels() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'enterprise_mandatory_channels'} = $values_5;
        }
        if (null !== $object->getEnterpriseMdmDateEnabled()) {
            $data->{'enterprise_mdm_date_enabled'} = $object->getEnterpriseMdmDateEnabled();
        }
        if (null !== $object->getEnterpriseMdmLevel()) {
            $data->{'enterprise_mdm_level'} = $object->getEnterpriseMdmLevel();
        }
        if (null !== $object->getEnterpriseTeamCreationRequest()) {
            $data->{'enterprise_team_creation_request'} = $this->normalizer->normalize($object->getEnterpriseTeamCreationRequest(), 'json', $context);
        }
        if (null !== $object->getFileLimitWhitelisted()) {
            $data->{'file_limit_whitelisted'} = $object->getFileLimitWhitelisted();
        }
        if (null !== $object->getFileRetentionDuration()) {
            $data->{'file_retention_duration'} = $object->getFileRetentionDuration();
        }
        if (null !== $object->getFileRetentionType()) {
            $data->{'file_retention_type'} = $object->getFileRetentionType();
        }
        if (null !== $object->getGdriveEnabledTeam()) {
            $data->{'gdrive_enabled_team'} = $object->getGdriveEnabledTeam();
        }
        if (null !== $object->getGroupRetentionDuration()) {
            $data->{'group_retention_duration'} = $object->getGroupRetentionDuration();
        }
        if (null !== $object->getGroupRetentionType()) {
            $data->{'group_retention_type'} = $object->getGroupRetentionType();
        }
        if (null !== $object->getHideReferers()) {
            $data->{'hide_referers'} = $object->getHideReferers();
        }
        if (null !== $object->getInvitesLimit()) {
            $data->{'invites_limit'} = $object->getInvitesLimit();
        }
        if (null !== $object->getInvitesOnlyAdmins()) {
            $data->{'invites_only_admins'} = $object->getInvitesOnlyAdmins();
        }
        if (null !== $object->getLocale()) {
            $data->{'locale'} = $object->getLocale();
        }
        if (null !== $object->getLoudChannelMentionsLimit()) {
            $data->{'loud_channel_mentions_limit'} = $object->getLoudChannelMentionsLimit();
        }
        if (null !== $object->getMsgEditWindowMins()) {
            $data->{'msg_edit_window_mins'} = $object->getMsgEditWindowMins();
        }
        if (null !== $object->getRetentionDuration()) {
            $data->{'retention_duration'} = $object->getRetentionDuration();
        }
        if (null !== $object->getRetentionType()) {
            $data->{'retention_type'} = $object->getRetentionType();
        }
        if (null !== $object->getShowJoinLeave()) {
            $data->{'show_join_leave'} = $object->getShowJoinLeave();
        }
        if (null !== $object->getUsesCustomizedCustomStatusPresets()) {
            $data->{'uses_customized_custom_status_presets'} = $object->getUsesCustomizedCustomStatusPresets();
        }
        if (null !== $object->getWarnBeforeAtChannel()) {
            $data->{'warn_before_at_channel'} = $object->getWarnBeforeAtChannel();
        }
        if (null !== $object->getWhoCanArchiveChannels()) {
            $data->{'who_can_archive_channels'} = $object->getWhoCanArchiveChannels();
        }
        if (null !== $object->getWhoCanAtChannel()) {
            $data->{'who_can_at_channel'} = $object->getWhoCanAtChannel();
        }
        if (null !== $object->getWhoCanAtEveryone()) {
            $data->{'who_can_at_everyone'} = $object->getWhoCanAtEveryone();
        }
        if (null !== $object->getWhoCanChangeTeamProfile()) {
            $data->{'who_can_change_team_profile'} = $object->getWhoCanChangeTeamProfile();
        }
        if (null !== $object->getWhoCanCreateChannels()) {
            $data->{'who_can_create_channels'} = $object->getWhoCanCreateChannels();
        }
        if (null !== $object->getWhoCanCreateDeleteUserGroups()) {
            $data->{'who_can_create_delete_user_groups'} = $object->getWhoCanCreateDeleteUserGroups();
        }
        if (null !== $object->getWhoCanCreateGroups()) {
            $data->{'who_can_create_groups'} = $object->getWhoCanCreateGroups();
        }
        if (null !== $object->getWhoCanCreateSharedChannels()) {
            $data->{'who_can_create_shared_channels'} = $object->getWhoCanCreateSharedChannels();
        }
        if (null !== $object->getWhoCanEditUserGroups()) {
            $data->{'who_can_edit_user_groups'} = $object->getWhoCanEditUserGroups();
        }
        if (null !== $object->getWhoCanKickChannels()) {
            $data->{'who_can_kick_channels'} = $object->getWhoCanKickChannels();
        }
        if (null !== $object->getWhoCanKickGroups()) {
            $data->{'who_can_kick_groups'} = $object->getWhoCanKickGroups();
        }
        if (null !== $object->getWhoCanManageGuests()) {
            $data->{'who_can_manage_guests'} = $this->normalizer->normalize($object->getWhoCanManageGuests(), 'json', $context);
        }
        if (null !== $object->getWhoCanManageIntegrations()) {
            $data->{'who_can_manage_integrations'} = $this->normalizer->normalize($object->getWhoCanManageIntegrations(), 'json', $context);
        }
        if (null !== $object->getWhoCanManageSharedChannels()) {
            $data->{'who_can_manage_shared_channels'} = $this->normalizer->normalize($object->getWhoCanManageSharedChannels(), 'json', $context);
        }
        if (null !== $object->getWhoCanPostGeneral()) {
            $data->{'who_can_post_general'} = $object->getWhoCanPostGeneral();
        }
        if (null !== $object->getWhoCanPostInSharedChannels()) {
            $data->{'who_can_post_in_shared_channels'} = $this->normalizer->normalize($object->getWhoCanPostInSharedChannels(), 'json', $context);
        }
        if (null !== $object->getWhoHasTeamVisibility()) {
            $data->{'who_has_team_visibility'} = $object->getWhoHasTeamVisibility();
        }
        foreach ($object as $key => $value_6) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_6;
            }
        }

        return $data;
    }
}
