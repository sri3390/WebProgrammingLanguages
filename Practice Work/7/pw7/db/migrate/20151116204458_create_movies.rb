class CreateMovies < ActiveRecord::Migration
  def change
    create_table :movies do |t|
      t.string :title
      t.integer :year
      t.integer :rating
      t.text :description

      t.timestamps
    end
  end
end
