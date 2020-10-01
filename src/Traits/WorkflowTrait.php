<?php

namespace Brexis\LaravelWorkflow\Traits;

use Brexis\LaravelWorkflow\Facades\WorkflowFacade as Workflow;

/**
 * @author Boris Koumondji <brexis@yahoo.fr>
 */
trait WorkflowTrait
{
    public function workflow_apply($transition, $workflow = null)
    {
        return Workflow::get($this, $workflow)->apply($this, $transition);
    }

    public function workflow_can($transition, $workflow = null)
    {
        return Workflow::get($this, $workflow)->can($this, $transition);
    }

    public function workflow_transitions($workflow = null)
    {
        return Workflow::get($this, $workflow)->getEnabledTransitions($this);
    }

    public function workflowApply($transition, $workflow = null)
    {
        return $this->workflow_apply($transition, $workflow);
    }

    public function workflowCan($transition, $workflow = null)
    {
        return $this->workflow_can($transition, $workflow);
    }

    public function workflowTransitions($workflow = null)
    {
        return $this->workflow_transitions($workflow);
    }
}
