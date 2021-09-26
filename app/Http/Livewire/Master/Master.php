<?php

namespace App\Http\Livewire\Master;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Master\Features;
use App\Models\Master\BodyType;
use App\Models\Master\BrandModels;
use App\Models\Master\DriveTrain;
use App\Models\Master\Categories;
use App\Models\Master\Location;
use App\Models\Master\Fuel;
use App\Models\Master\Color;
use App\Models\Master\Make;
use App\Models\Master\Transmissions;

class Master extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // protected $listeners = [
    //     'deletemakeConfirmed' => 'deleteMake',
    //     'deletemodelConfirmed' => 'deleteModel',
    //     'deletecolorConfirmed' => 'deleteColor',
    //     'deletetransmissionConfirmed' => 'deleteTransmission',
    //     'deletedriveTrainConfirmed' => 'deleteDriveTrain',
    //     'deletebodyTypeConfirmed' => 'deleteBodyType',
    //     'deletecategoryConfirmed' => 'deleteCategory',
    //     'deletefeatureTypeConfirmed' => 'deleteFeature',
    //     'deletedriveTrainConfirmed' => 'deleteDriveTrain',
    //     'deletelocationConfirmed' => 'deleteLocation'
    // ];

    public $make_name,
        $model_name,
        $fuel_name,
        $category_name,
        $drive_train_name,
        $transmission_name,
        $feature_name,
        $location_name,
        $color_name,
        $body_type_name,

        $color_id,
        $make_id,
        $model_id,
        $drive_train_id,
        $body_type_id,
        $transmission_id,
        $fuel_id,
        $feature_id,
        $category_id,
        $location_id,
     
        $deleteMakeId,
        $deleteModelId,
        $deleteFuelId,
        $deleteCategoryId,
        $deleteDriveTrainId,
        $deleteTransmissionId,
        $deleteFeatureId,
        $deleteColorId,
        $deleteBodyTypeId,
        $deleteLocationId;

  public $showEditModal = false;
    public $deleteMakeModal = false;
    public $deleteModelModal = false;
    public $deleteColorModal = false;
    public $deleteFeatureModal = false;
    public $deleteFuelModal = false;
    public $deleteTransmissionModal = false;
    public $deleteBodyTypeModal = false;
    public $deleteLocationModal = false;
    public $deleteCategoryModal = false;
    public $deleteDriveTrainModal = false;

 //make
 public function addMake()
 {
    $this->dispatchBrowserEvent('show-make-modal');
     $this->make_name = '';
     $this->showEditModal = false;
    
 }

//  public function editMake(Make $make)
//  {
//      $this->make_id = $make->id;

//      $this->showEditModal = true;
//      $this->make_name = $make->make_name;
//      $this->dispatchBrowserEvent('show-make-modal');
//  }

//  public function updateMake(Make $make)
//  {
//      $validatedMake = $this->validate([
//          'make_name' => 'required|string'

//      ]);

//      $record = Make::find($this->make_id);

//      $record->make_name = $this->make_name;

//      $record->save($validatedMake);

//      $this->dispatchBrowserEvent('hide-make-modal', ['message' => 'make updated successfully']);
//  }

//  public function confirmDeleteMake($id)
//  {

//      $this->deleteMakeModal = true;
//      $this->deleteMakeId = $id;

//      $this->dispatchBrowserEvent('delete-make');
//  }

//  public function deleteMake(Make $make)
//  {
//      // $this->service_id = $service->id;

//      $delete = Make::find($this->deleteMakeId);

//      $delete->delete();
//      $this->dispatchBrowserEvent('make-deleted');
//  }

//  public function createMake()
//  {
//      $validatedMake = $this->validate([
//          'make_name' => 'required|string'

//      ]);

//      Make::create($validatedMake);

//      // session()->flash('message', 'service added successfully');

//      $this->dispatchBrowserEvent('hide-make-modal', ['message' => 'make added successfully']);

//      return redirect()->back();
//  }

 //**************************************************************************************************** */

 public function addModel()
 {
    $this->dispatchBrowserEvent('show-model-modal');
     $this->model_name = '';
     $this->showEditModal = false;
    
 }






    public function render()
    {
        $makes = Make::paginate(4);
        $models = BrandModels::paginate(4);
        $drive_trains = DriveTrain::paginate(4);
        $body_types = BodyType::paginate(4);
        $colors = Color::paginate(4);
        $locations = Location::paginate(4);
        $fuels = Fuel::paginate(4);
        $categories = Categories::paginate(4);
        $transmissions = Transmissions::paginate(4);
        $features = Features::paginate(4);



        return view('livewire.master.master',[
            'makes'=>$makes,
            'models'=>$models,
            'drive_trains'=>$drive_trains,
            'body_types'=>$body_types,
            'colors'=>$colors,
            'locations'=>$locations,
            'fuels'=>$fuels,
            'categories'=>$categories,
            'transmissions'=>$transmissions,
            'features'=>$features
        ]);
    }
}
