<?php
namespace App\Http\Resources\Checklist;
use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Item\ItemCollection;

class GetListofChecklistResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
                'type'          => 'checklists',
                'id'            => $this->id,
                'attributes'    => [
                    'object_domain'     => $this->object_domain,
                    'object_id'         => $this->object_id,
                    'description'       => $this->description,
                    'is_completed'      => $this->is_completed,
                    'due'               => $this->due,
                    'task_id'           => $this->task_id,
                    'urgency'           => $this->urgency,
                    'completed_at'      => $this->completed_at,
                    'last_update_by'    => $this->updated_by,
                    'update_at'         => $this->updated_at,
                    'created_at'        => $this->created_at
                ],
                'links' => [
                    'self' => route('getlistofchecklists')
                ]
        ];
    }
}