<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Attachment{
/**
 * App\Models\Attachment\ExtensionFile
 *
 * @property int $id
 * @property int|null $extension_id
 * @property int|null $user_id
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile whereExtensionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionFile whereUserId($value)
 */
	class ExtensionFile extends \Eloquent {}
}

namespace App\Models\Attachment{
/**
 * App\Models\Attachment\PartnershipFile
 *
 * @property int $id
 * @property int|null $partnership_id
 * @property int|null $user_id
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile wherePartnershipId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipFile whereUserId($value)
 */
	class PartnershipFile extends \Eloquent {}
}

namespace App\Models\Attachment{
/**
 * App\Models\Attachment\PresentationFile
 *
 * @property int $id
 * @property int|null $presentation_id
 * @property int|null $user_id
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile wherePresentationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationFile whereUserId($value)
 */
	class PresentationFile extends \Eloquent {}
}

namespace App\Models\Attachment{
/**
 * App\Models\Attachment\PublicationFile
 *
 * @property int $id
 * @property int|null $publication_id
 * @property int|null $user_id
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile wherePublicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationFile whereUserId($value)
 */
	class PublicationFile extends \Eloquent {}
}

namespace App\Models\Attachment{
/**
 * App\Models\Attachment\ResearchFile
 *
 * @property int $id
 * @property int|null $research_id
 * @property int|null $user_id
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \App\Models\Repository\Research|null $research
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile whereResearchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchFile whereUserId($value)
 */
	class ResearchFile extends \Eloquent {}
}

namespace App\Models\Attachment{
/**
 * App\Models\Attachment\TrainingFile
 *
 * @property int $id
 * @property int|null $training_id
 * @property int|null $user_id
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile whereTrainingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingFile whereUserId($value)
 */
	class TrainingFile extends \Eloquent {}
}

namespace App\Models\Evaluation{
/**
 * App\Models\Evaluation\ExtensionEvaluation
 *
 * @property int $id
 * @property int|null $extension_id
 * @property int|null $evaluator_id
 * @property string|null $evaluation
 * @property int|null $is_read
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\User> $evaluators
 * @property-read int|null $evaluators_count
 * @property-read \App\Models\Repository\Extension|null $extension
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereEvaluatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereExtensionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtensionEvaluation whereIsRead($value)
 */
	class ExtensionEvaluation extends \Eloquent {}
}

namespace App\Models\Evaluation{
/**
 * App\Models\Evaluation\PartnershipEvaluation
 *
 * @property int $id
 * @property int|null $partnership_id
 * @property int|null $evaluator_id
 * @property string|null $evaluation
 * @property int|null $is_read
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\User> $evaluators
 * @property-read int|null $evaluators_count
 * @property-read \App\Models\Repository\Partnership|null $partnership
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation whereEvaluatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartnershipEvaluation wherePartnershipId($value)
 */
	class PartnershipEvaluation extends \Eloquent {}
}

namespace App\Models\Evaluation{
/**
 * App\Models\Evaluation\PresentationEvaluation
 *
 * @property int $id
 * @property int|null $presentation_id
 * @property int|null $evaluator_id
 * @property string|null $evaluation
 * @property int|null $is_read
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\User> $evaluators
 * @property-read int|null $evaluators_count
 * @property-read \App\Models\Repository\Presentation|null $presentation
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation whereEvaluatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PresentationEvaluation wherePresentationId($value)
 */
	class PresentationEvaluation extends \Eloquent {}
}

namespace App\Models\Evaluation{
/**
 * App\Models\Evaluation\PublicationEvaluation
 *
 * @property int $id
 * @property int|null $publication_id
 * @property int|null $evaluator_id
 * @property string|null $evaluation
 * @property int|null $is_read
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\User> $evaluators
 * @property-read int|null $evaluators_count
 * @property-read \App\Models\Repository\Publication|null $publication
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation whereEvaluatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PublicationEvaluation wherePublicationId($value)
 */
	class PublicationEvaluation extends \Eloquent {}
}

namespace App\Models\Evaluation{
/**
 * App\Models\Evaluation\ResearchEvaluation
 *
 * @property int $id
 * @property int|null $research_id
 * @property int|null $evaluator_id
 * @property string|null $evaluation
 * @property int|null $is_read
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\User> $evaluators
 * @property-read int|null $evaluators_count
 * @property-read \App\Models\Repository\Research|null $research
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereEvaluatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResearchEvaluation whereResearchId($value)
 */
	class ResearchEvaluation extends \Eloquent {}
}

namespace App\Models\Evaluation{
/**
 * App\Models\Evaluation\TrainingEvaluation
 *
 * @property int $id
 * @property int|null $training_id
 * @property int|null $evaluator_id
 * @property string|null $evaluation
 * @property int|null $is_read
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User\User> $evaluators
 * @property-read int|null $evaluators_count
 * @property-read \App\Models\Repository\Training|null $training
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation query()
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereEvaluatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TrainingEvaluation whereTrainingId($value)
 */
	class TrainingEvaluation extends \Eloquent {}
}

namespace App\Models\Feed{
/**
 * App\Models\Feed\FeedableItem
 *
 * @property int $id
 * @property int|null $feedable_id
 * @property string|null $feedable_type
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $feedable
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem whereFeedableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem whereFeedableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeedableItem withoutTrashed()
 */
	class FeedableItem extends \Eloquent {}
}

namespace App\Models\FileUpload{
/**
 * App\Models\FileUpload\TemporaryFile
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemporaryFile query()
 */
	class TemporaryFile extends \Eloquent {}
}

namespace App\Models\Log{
/**
 * App\Models\Log\LogUser
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $ip_address
 * @property string|null $agent
 * @property int|null $log_state
 * @property string|null $log_date
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \App\Models\User\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereLogDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereLogState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUser whereUserId($value)
 */
	class LogUser extends \Eloquent {}
}

namespace App\Models\Log{
/**
 * App\Models\Log\LogUserActivity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $ip_address
 * @property string|null $agent
 * @property string|null $activity
 * @property int|null $subject_id
 * @property string|null $subject_type
 * @property string|null $log_date
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \App\Models\User\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity query()
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereLogDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereSubjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LogUserActivity whereUserId($value)
 */
	class LogUserActivity extends \Eloquent {}
}

namespace App\Models\Misc{
/**
 * App\Models\Misc\Miscellaneous
 *
 * @property int $id
 * @property string|null $term
 * @property string|null $group
 * @property int $status
 * @property int $active
 * @property \Illuminate\Support\Carbon $date_created
 * @property \Illuminate\Support\Carbon $date_modified
 * @property-read \App\Models\Repository\Research|null $category_research
 * @property-read \App\Models\Repository\Research|null $fund_research
 * @property-read \App\Models\Repository\Research|null $status_research
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous query()
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereTerm($value)
 */
	class Miscellaneous extends \Eloquent {}
}

namespace App\Models\Repository{
/**
 * App\Models\Repository\Extension
 *
 * @property int $id
 * @property string|null $extension
 * @property string|null $date_from
 * @property string|null $date_to
 * @property int|null $quantity
 * @property string|null $beneficiaries
 * @property int $owner
 * @property int $is_evaluated
 * @property int $active
 * @property \Illuminate\Support\Carbon $date_created
 * @property \Illuminate\Support\Carbon $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attachment\ExtensionFile> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Evaluation\ExtensionEvaluation> $evaluations
 * @property-read int|null $evaluations_count
 * @property-read \App\Models\Feed\FeedableItem|null $feedItem
 * @property-read \App\Models\User\User|null $file_owner
 * @method static \Illuminate\Database\Eloquent\Builder|Extension newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension query()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereBeneficiaries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereIsEvaluated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Extension withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Extension withoutTrashed()
 */
	class Extension extends \Eloquent {}
}

namespace App\Models\Repository{
/**
 * App\Models\Repository\Partnership
 *
 * @property int $id
 * @property string|null $partner
 * @property string|null $activity
 * @property string $date_from
 * @property string $date_to
 * @property int $owner
 * @property int $is_evaluated
 * @property int $active
 * @property \Illuminate\Support\Carbon $date_created
 * @property \Illuminate\Support\Carbon $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attachment\PartnershipFile> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Evaluation\PartnershipEvaluation> $evaluations
 * @property-read int|null $evaluations_count
 * @property-read \App\Models\Feed\FeedableItem|null $feedItem
 * @property-read \App\Models\User\User|null $file_owner
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership query()
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereIsEvaluated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership wherePartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Partnership withoutTrashed()
 */
	class Partnership extends \Eloquent {}
}

namespace App\Models\Repository{
/**
 * App\Models\Repository\Presentation
 *
 * @property int $id
 * @property string $date_presented
 * @property string|null $title
 * @property string|null $author
 * @property string|null $forum
 * @property string|null $venue
 * @property int|null $type_id
 * @property int $owner
 * @property int $is_evaluated
 * @property int $active
 * @property \Illuminate\Support\Carbon $date_created
 * @property \Illuminate\Support\Carbon $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attachment\PresentationFile> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Evaluation\PresentationEvaluation> $evaluations
 * @property-read int|null $evaluations_count
 * @property-read \App\Models\Feed\FeedableItem|null $feedItem
 * @property-read \App\Models\User\User|null $file_owner
 * @property-read \App\Models\Misc\Miscellaneous|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereDatePresented($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereForum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereIsEvaluated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation whereVenue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Presentation withoutTrashed()
 */
	class Presentation extends \Eloquent {}
}

namespace App\Models\Repository{
/**
 * App\Models\Repository\Publication
 *
 * @property int $id
 * @property string $date_published
 * @property string|null $title
 * @property string|null $author
 * @property string|null $publisher
 * @property string|null $volume
 * @property string|null $issue
 * @property string|null $page
 * @property int $owner
 * @property int $is_evaluated
 * @property int $active
 * @property \Illuminate\Support\Carbon $date_created
 * @property \Illuminate\Support\Carbon $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attachment\PublicationFile> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Evaluation\PublicationEvaluation> $evaluations
 * @property-read int|null $evaluations_count
 * @property-read \App\Models\Feed\FeedableItem|null $feedItem
 * @property-read \App\Models\User\User|null $file_owner
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereDatePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereIsEvaluated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePublisher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication withoutTrashed()
 */
	class Publication extends \Eloquent {}
}

namespace App\Models\Repository{
/**
 * App\Models\Repository\Research
 *
 * @property int $id
 * @property string|null $commodity
 * @property int|null $category_id
 * @property string|null $program
 * @property string|null $project
 * @property string|null $researcher
 * @property string|null $sites
 * @property string|null $year_start
 * @property string|null $year_end
 * @property string|null $agency
 * @property float|null $budget
 * @property string|null $collaborative
 * @property int|null $fund_id
 * @property int|null $status_id
 * @property int $owner
 * @property int $is_evaluated
 * @property int $active
 * @property \Illuminate\Support\Carbon $date_created
 * @property \Illuminate\Support\Carbon $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attachment\ResearchFile> $attachments
 * @property-read int|null $attachments_count
 * @property-read \App\Models\Misc\Miscellaneous|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Evaluation\ResearchEvaluation> $evaluations
 * @property-read int|null $evaluations_count
 * @property-read \App\Models\Feed\FeedableItem|null $feedItem
 * @property-read \App\Models\User\User|null $file_owner
 * @property-read \App\Models\Misc\Miscellaneous|null $fund
 * @property-read \App\Models\Misc\Miscellaneous|null $research_status
 * @method static \Illuminate\Database\Eloquent\Builder|Research newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Research newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Research onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Research query()
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereAgency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereBudget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereCollaborative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereCommodity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereFundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereIsEvaluated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereProgram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereProject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereResearcher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereSites($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereYearEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research whereYearStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Research withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Research withoutTrashed()
 */
	class Research extends \Eloquent {}
}

namespace App\Models\Repository{
/**
 * App\Models\Repository\Training
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $date_from
 * @property string|null $date_to
 * @property string|null $duration
 * @property int|null $no_of_trainees
 * @property int|null $weight
 * @property int|null $no_of_trainees_surveyed
 * @property int|null $quality_id
 * @property string|null $relevance
 * @property int $owner
 * @property int $is_evaluated
 * @property int $active
 * @property \Illuminate\Support\Carbon $date_created
 * @property \Illuminate\Support\Carbon $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attachment\TrainingFile> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Evaluation\TrainingEvaluation> $evaluations
 * @property-read int|null $evaluations_count
 * @property-read \App\Models\Feed\FeedableItem|null $feedItem
 * @property-read \App\Models\User\User|null $file_owner
 * @property-read \App\Models\Misc\Miscellaneous|null $quality
 * @method static \Illuminate\Database\Eloquent\Builder|Training newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Training newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Training onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Training query()
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereIsEvaluated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereNoOfTrainees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereNoOfTraineesSurveyed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereQualityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereRelevance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Training withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Training withoutTrashed()
 */
	class Training extends \Eloquent {}
}

namespace App\Models\Requisite{
/**
 * App\Models\Requisite\Institute
 *
 * @property int $id
 * @property string|null $term
 * @property string|null $definition
 * @property int|null $status
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \App\Models\Requisite\Program|null $program
 * @method static \Illuminate\Database\Eloquent\Builder|Institute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereDefinition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institute withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Institute withoutTrashed()
 */
	class Institute extends \Eloquent {}
}

namespace App\Models\Requisite{
/**
 * App\Models\Requisite\Program
 *
 * @property int $id
 * @property int|null $institute_id
 * @property string|null $term
 * @property string|null $definition
 * @property int|null $status
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \App\Models\Requisite\Institute|null $institute
 * @method static \Illuminate\Database\Eloquent\Builder|Program newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Program query()
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDefinition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Program withoutTrashed()
 */
	class Program extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\General
 *
 * @property int $id
 * @property string|null $site_title
 * @property string|null $site_definition
 * @property string|null $entity_name
 * @property string|null $entity_definition
 * @property string|null $app_url
 * @property string|null $fav_icon
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @method static \Illuminate\Database\Eloquent\Builder|General newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|General newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|General query()
 * @method static \Illuminate\Database\Eloquent\Builder|General whereAppUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereEntityDefinition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereEntityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereFavIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereSiteDefinition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|General whereSiteTitle($value)
 */
	class General extends \Eloquent {}
}

namespace App\Models\User{
/**
 * App\Models\User\User
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $middlename
 * @property string|null $lastname
 * @property string|null $extension
 * @property string|null $title
 * @property string|null $avatar
 * @property string|null $email
 * @property string|null $password
 * @property int|null $role_id
 * @property int|null $status
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property \Illuminate\Support\Carbon|null $date_deleted
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Evaluation\ResearchEvaluation|null $research_evaluator
 * @property-read \App\Models\User\UserTempAvatar|null $temp_avatar
 * @property-read \App\Models\User\UserRole|null $user_role
 * @property-read User|null $user_token
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereExtension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMiddlename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models\User{
/**
 * App\Models\User\UserRole
 *
 * @property int $id
 * @property string|null $term
 * @property int|null $is_visible
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereIsVisible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereTerm($value)
 */
	class UserRole extends \Eloquent {}
}

namespace App\Models\User{
/**
 * App\Models\User\UserTempAvatar
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $avatar
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \App\Models\User\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTempAvatar whereUserId($value)
 */
	class UserTempAvatar extends \Eloquent {}
}

namespace App\Models\User{
/**
 * App\Models\User\UserToken
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $token
 * @property int|null $active
 * @property \Illuminate\Support\Carbon|null $date_created
 * @property \Illuminate\Support\Carbon|null $date_modified
 * @property-read \App\Models\User\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereDateModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereUserId($value)
 */
	class UserToken extends \Eloquent {}
}

