class Movie < ActiveRecord::Base
 validates :title, presence: true
                    
 validates :rating, presence: true
 
 validates_numericality_of :rating, :greater_than => 0, :less_than => 10
 
end
